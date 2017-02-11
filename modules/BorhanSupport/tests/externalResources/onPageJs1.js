if( console && console.log )
	console.log( 'OnPageJs 1' );
BWidget.addReadyCallback( function( playerId ){
	if( console && console.log )
		console.log( 'OnPageJs 1: ' + playerId );
});