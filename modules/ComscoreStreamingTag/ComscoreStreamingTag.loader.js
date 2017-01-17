/**
 * ComscoreStreamingTag loader
 */
( function( mw ) { "use strict";
	mw.addBorhanPlugin( ["ComScoreStreamingTag"], 'comScoreStreamingTag', function( embedPlayer, callback ){
		new mw.ComscoreStreamingTag( embedPlayer, callback );
	});
})( window.mw);
