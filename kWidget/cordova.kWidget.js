/**
 * Created with JetBrains WebStorm.
 * User: elizasapir
 * Date: 9/10/13
 * Time: 5:58 PM
 * To change this template use File | Settings | File Templates.
 */

/**
 * Cordova bWidget lib
 */
(function(bWidget){ "use strict";
	if( !bWidget ){
		return ;
	}
	var init = function(){

		if ( bWidget.isAndroid() ){
			var executeCordova;

			cordova.define("cordova/plugin/NativeComponentPlugin",
				function(require, exports, module) {
					executeCordova = require("cordova/exec");
					executeCordova( null, null, "NativeComponentPlugin", "cordovaInitialized", [] );
				});
			//This is mandatory for supporting cordova plugins
			if (!window.plugins) {
				window.plugins = {};
			}
			//TODO define new plugin - "OfflineContentPlugin"
			if (!window.plugins.NativeComponentPlugin) {
				window.plugins.NativeComponentPlugin = cordova.require( "cordova/plugin/NativeComponentPlugin" );
			}
		}
		cordova.bWidget = {
			// This element is populated by cordova
			proxyElement: null,
			// callbacks to auth object events go here:
			embed : function( targetId, settings ){
				var _this = this;
				this.target = document.getElementById( targetId );

				if( !this.target ){
					bWidget.log( "Error could not find target id, for cordova embed" );
				}

				this.target.style.backgroundColor += "transparent";

				//bWidget.getIframeRequest( targetId, settings ) - we get it encoded so we decode before encoding whole url again
				this.iframeUrl = bWidget.getIframeUrl() + '?' + decodeURIComponent(bWidget.getIframeRequest( targetId, settings ));
				this.iframeUrl += '#' + JSON.stringify( window.preMwEmbedConfig );
				this.iframeUrl = this.iframeUrl.replace(/'/g,"");
				this.addApi( this.target );

				// Setting kplayer id for jsCallbackReady
				this.setKPlayerId( targetId );

				if ( settings.playOnlyFullscreen )  {
					bWidget.addThumbCssRules();
					var thumbUrl = mw.getConfig('EmbedPlayer.BlackPixel') || bWidget.getBorhanThumbUrl( settings );
					this.target.innerHTML = '' +
						'<div style="position: relative; width: 100%; height: 100%;">' +
						'<img src="' + thumbUrl  + '" >' +
						'<div class="bWidgetCentered bWidgetPlayBtn" ' +
						'id="' + targetId + '_playBtn"' +
						'></div></div>';
					// Add a click binding to do the really embed:
					var playBtn = document.getElementById( targetId + '_playBtn' );
					bWidget.addEvent(playBtn, 'touchstart', function(){
						_this.drawPlayer( _this.target, true );
						_this.exec( "setIframeUrl", [ _this.iframeUrl ], "NativeComponentPlugin" );
					});
				} else {
					this.drawPlayer( this.target );
					this.exec( "setIframeUrl", [ this.iframeUrl ], "NativeComponentPlugin" );
					window.addEventListener('orientationchange', function(){
						//when we get this event the new dimensions aren't set yet
						if ( bWidget.isAndroid() ){
							setTimeout( function() {
								_this.drawPlayer( _this.target );
							}, 250 );
						}else {
							_this.drawPlayer( _this.target );
						}
					});
				}
			},
			addApi: function( target ){
				target.exec = this.exec;
				target.evaluate = this.evaluate;
				target.sendNotification = this.sendNotification;
				target.addJsListener = this.addJsListener;
				target.asyncEvaluate = this.asyncEvaluate;
				target.setBDPAttribute = this.setBDPAttribute;
				target.removeJsListener = this.removeJsListener;
			},
			exec: function( command, args, pluginName ){
				if( args == undefined || !args ){
					args = [];
				}

				// Supporting HTML5 player version 2.1 and lower
				// Since plugin name was set hardcoded to "NativeComponentPlugin"
				if( pluginName == undefined || !pluginName ){
					pluginName = "NativeComponentPlugin";
				}

				if ( bWidget.isAndroid() ){
					cordova.exec = executeCordova;
				}
				cordova.exec(null, null, pluginName, command, args);
			},
			evaluate:function(){
				this.exec( "evaluate", [ '' ], "NativeComponentPlugin" );
			},
			sendNotification:function( notificationName, notificationData ){
				this.exec( "sendNotification", [ notificationName, JSON.stringify( notificationData ) ], "NativeComponentPlugin" );
			},
			addJsListener: function( notificationName, callbackName ){
				this.exec( "addJsListener", [ notificationName, callbackName ], "NativeComponentPlugin" );
			},
			removeJsListener: function( notificationName, callbackName ){
				this.exec( "removeJsListener", [ notificationName, callbackName ], "NativeComponentPlugin" );
			},
			asyncEvaluate: function( expression, callbackName ) {
				this.exec( "asyncEvaluate", [ expression, callbackName ], "NativeComponentPlugin" );
			},
			setBDPAttribute: function( host, prop, value ) {
				this.exec( "setBDPAttribute", [ host, prop, value ], "NativeComponentPlugin" );
			},
			drawPlayer: function( target , openInFullscreen ){
				var isFullscreen = 0;

				if ( openInFullscreen ) {
					isFullscreen = 1;
				}
				// get target size + position
				var videoElementRect = target.getBoundingClientRect();
				var x = videoElementRect.left;
				var y = videoElementRect.top + document.body.scrollTop;
				var w = videoElementRect.right - videoElementRect.left;
				var h = videoElementRect.bottom - videoElementRect.top;

				this.exec( "drawVideoNativeComponent", [ x, y, w, h, isFullscreen ], "NativeComponentPlugin" );
			},
			setKPlayerId: function( targetId ){
				this.exec( "setKPlayerId", [ targetId ], "NativeComponentPlugin" );
			}
		};
	}
	document.addEventListener( "deviceready", init, false );
})( window.bWidget );