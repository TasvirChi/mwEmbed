( function( mw, $ ) { "use strict";

	// Add supported external players:
	$( mw ).bind('EmbedPlayerUpdateMediaPlayers', function( event, mediaPlayers ){
		
		var youTubePlayer = new mw.MediaPlayer( 'YouTube', ['video/youtube'], 'YouTube' );
		mediaPlayers.addPlayer( youTubePlayer );
		mediaPlayers.defaultPlayers['video/youtube'] = [ 'YouTube' ];
		
	});

	// Setup the check for BorhanSupport_AddExternalMedia event
	$( mw ).bind( 'EmbedPlayerNewPlayer', function(event, embedPlayer){
		$( embedPlayer ).bind( 'BorhanSupport_AddExternalMedia', function(event, entryMeta){
			switch( entryMeta.externalSourceType ){
				case 'YouTube':
					embedPlayer.mediaElement.tryAddSource( 
						$('<soruce>').attr({
							//TODO - remove hard coded URL
							'src' : 'http://www.youtube.com/watch?'+entryMeta.referenceId,
							'type': 'video/youtube'
						})
					)
				break;
				default:
					mw.log( "Error: Unknown external type: " + entryMeta.externalSourceType );
				break;
			}
		})
	});

} )( window.mw, window.jQuery );