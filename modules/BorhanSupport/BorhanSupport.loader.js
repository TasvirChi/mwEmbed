/**
 * kSupport module
 *
 * Add support for borhan api calls
 *
 * TODO this loader is a little too large portions should be refactored into separate files
 *  this refactor can happen post rl_17 resource loader support
 */
// Scope everything in "mw" ( keeps the global namespace clean )
( function( mw, $ ) { "use strict";

	// Add Borhan specific attributes to the embedPlayer
	$( mw ).bind( 'MwEmbedSupportReady', function(){
		mw.mergeConfig( 'EmbedPlayer.Attributes', {
			'kentryid' : null, // mediaProxy.entry.id
			'bwidgetid' : null,
			'kuiconfid' : null,
			'referenceId': null,
			// helps emulate the bdp behavior of not updating currentTime until a seek is complete.
			'kPreSeekTime': null,
			// Borhan player Metadata exported across the iframe
			'borhanPlayerMetaData' : null,
			'borhanEntryMetaData' : null,
			'borhanPlaylistData' : null,
			'playerConfig': null,
			'rawCuePoints' : null
		});

		mw.mergeConfig( 'EmbedPlayer.SourceAttributes', [
			'data-flavorid'
		]);
	});
	
	mw.borhanPluginWrapper = function( callback ){
		$(mw).bind('ProcessEmbedPlayers', callback );
	};
	
	/**
	 * Base utility functions
	 */
	mw.addBorhanConfCheck = function( callback ){
		$( mw ).bind( 'EmbedPlayerNewPlayer', function(event, embedPlayer){
			$( embedPlayer ).bind( 'Borhan_CheckConfig', function( event, embedPlayer, checkUiCallback ){
				callback( embedPlayer, checkUiCallback );
			})
		} );
	};

	/**
	 * Abstracts the base borhan plugin initialization
	 *
	 * @param depencies {Array} optional set of dependencies ( can also be set via php )
	 * @param pluginName {String} the unique plugin name per the uiConf / uiVars
	 * @param enabledCallback {function} the function called for a initialized plugin
	 */
	mw.addBorhanPlugin = function( dependencies, pluginName, initCallback ){
		// Handle optional dependencies
		if( ! $.isArray( dependencies ) ){
			initCallback = pluginName;
			pluginName = dependencies;
			dependencies = null;
		}

		mw.addBorhanConfCheck( function( embedPlayer, callback ){
			if( embedPlayer.isPluginEnabled( pluginName ) ){
				if( $.isArray( dependencies ) ){
					mw.load(dependencies, function(){
						initCallback(  embedPlayer, callback );
					})
				} else {
					initCallback(  embedPlayer, callback );
				}
			} else {
				callback();
			}
		});
	}

	// Make sure bWidget is part of EmbedPlayer dependencies if we have a uiConf id
	$( mw ).bind( 'EmbedPlayerUpdateDependencies', function( event, playerElement, dependencySet ){
		if( mw.getConfig( 'BorhanSupport.DepModuleList') ){
			$.merge( dependencySet,  mw.getConfig( 'BorhanSupport.DepModuleList') );
		}
		if( $( playerElement ).attr( 'bwidgetid' ) && $( playerElement ).attr( 'kuiconfid' ) ){
			dependencySet.push( 'mw.BWidgetSupport' );
		}
	});

	// Make sure flashvars and player config are ready as soon as we create a new player
	$( mw ).bind( 'EmbedPlayerNewPlayer', function(event, embedPlayer){
		if( mw.getConfig( 'BorhanSupport.PlayerConfig' ) ){
			embedPlayer.playerConfig =  mw.getConfig( 'BorhanSupport.PlayerConfig' );
			mw.setConfig('BorhanSupport.PlayerConfig', null );
		}
		// player config should be set before calling BorhanSupportNewPlayer
		$( mw ).trigger( 'BorhanSupportNewPlayer',  [ embedPlayer ] );
	});

	// Set binding to disable "waitForMeta" for borhan items ( We get size and length from api)
	$( mw ).bind( 'EmbedPlayerWaitForMetaCheck', function(even, playerElement ){
		if( $( playerElement ).attr( 'kuiconfid') || $( playerElement ).attr( 'kentryid') ){
			playerElement.waitForMeta = false;
		}
	});


} )( window.mw, window.jQuery );
