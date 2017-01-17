/**
* Handles access control preview code
*/
( function( mw, $ ) { "use strict";

var acCheck = function( embedPlayer ){
	var ac  = embedPlayer.borhanContextData;
	// TODO move getAccessControlStatus to local method
	var acStatus = bWidgetSupport.getAccessControlStatus( ac, embedPlayer );
	if( acStatus !== true ){
		embedPlayer.setError( acStatus );
		return ;
	}
};

//Check for new Embed Player events:
mw.addBorhanConfCheck( function( embedPlayer, callback ){
	if( embedPlayer.borhanContextData ){
		acCheck( embedPlayer );
	}
	callback();
});

})( window.mw, jQuery );