(function(mw, bWidget){

	bWidget.deprecatedGlobals = function(){
		// Note not all these were likely to be used externally,
		// we can more aggressively remove in a later library version.
		var globalFunctionMap = {
				'kIsIOS': 'isIOS',
				'kSupportsHTML5': 'supportsHTML5',
				'kGetFlashVersion': 'getFlashVersion',
				'kSupportsFlash': 'supportsFlash',
				'borhanIframeEmbed': 'embed',
				'kOutputFlashObject': 'outputFlashObject',
				'kIsHTML5FallForward': 'isHTML5FallForward',
				'kIframeWithoutApi': 'outputIframeWithoutApi',
				'kDirectDownloadFallback': 'outputDirectDownload',
				'kGetBorhanEmbedSettings': 'getEmbedSetting',
				'kGetBorhanPlayerList': 'getKalutaObjectList',
				'kCheckAddScript': 'rewriteObjectTags',
				'kAddScript' : 'loadHTML5Lib',
				'kPageHasAudioOrVideoTags' : 'pageHasAudioOrVideoTags',
				'kLoadJsRequestSet' : 'loadRequestSet',
				'kOverideJsFlashEmbed' : 'overrideFlashEmbedMethods',
				'kDoIframeRewriteList' : 'embedFromObjects',
				'kEmbedSettingsToUrl' : 'embedSettingsToUrl',
				'kGetAdditionalTargetCss' : 'getAdditionalTargetCss',
				'kAppendCssUrl' : 'appendCssUrl',
				'kAppendScriptUrl' : 'appendScriptUrl',
				'kFlashVars2Object' : 'flashVars2Object',
				'kFlashVarsToUrl' : 'flashVarsToUrl',
				'kFlashVarsToString' : 'flashVarsToString',
				'kServiceConfigToUrl' : 'serviceConfigToUrl',
				'kRunMwDomReady': 'rewriteObjectTags',
				// fully deprecated ( have no purpose any more )
				'restoreBorhanBDPCallback': false
		}
		for( var gName in globalFunctionMap ){
			(function( gName ){
				window[ gName ] = function(){
					// functions that have no server any purpose
					if( globalFunctionMap[ gName] === false ){
						bWidget.log( gName + ' is deprecated. This method no longer serves any purpose.' );
						return ;
					}
					bWidget.log( gName + ' is deprecated. Please use bWidget.' + globalFunctionMap[ gName] );
					var args = Array.prototype.slice.call( arguments, 0 );
					if( typeof bWidget[ globalFunctionMap[ gName] ] != 'function' ){
						bWidget.log( "Error bWidget missing method: " + globalFunctionMap[ gName] );
						return ;
					}
					return bWidget[ globalFunctionMap[ gName ] ].apply( bWidget, args );
				}
			})( gName );
		}
	}
	// Add all the deprecated globals:
	bWidget.deprecatedGlobals();

})( window.mw, window.bWidget );