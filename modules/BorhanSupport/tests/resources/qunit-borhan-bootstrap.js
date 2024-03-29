//must come after qunit-bootstrap.js and after mwEmbedLoader.php
if( window.QUnit ){

	// Force html5 if not running flash qUnit tests:
	if( document.URL.indexOf('runFlashQunitTests') === -1 
			&& 
		typeof window['disablePlaybackModeSelector'] == 'undefined'
	){
		mw.setConfig( 'forceMobileHTML5', true );
	}

	window.QUnit.start();
	jsCallbackCalledId = null;
	asyncTest( "BorhanSupport::PlayerLoaded", function(){
		// Player time out in 90 seconds:
		setTimeout( function(){
			ok( false, "Player timed out" );
			start();
		}, 180000 );
		window['borhanPlayerLoadedCallbackCalled'] = function( playerId ){
			ok( true, "Player loaded: " + playerId );
			if( typeof jsBorhanPlayerTest == 'function' ){
				jsBorhanPlayerTest( playerId );
			}
			// add timeout for async test to register
			setTimeout( function(){
				start();
			}, 100);
		}
		// check if jscallback ready fired before async test:
		if( jsCallbackCalledId != null ){
			borhanPlayerLoadedCallbackCalled( jsCallbackCalledId );
		}
	});

	bWidget.addReadyCallback( function( videoId ){
		// check if the test can access the iframe
		var domainRegEx = new RegExp(/^((http[s]?):\/)?\/?([^:\/\s]+)(:([^\/]*))?((\/\w+)*\/)([\w\-\.]+[^#?\s]+)(\?([^#]*))?(#(.*))?$/);
		var match = document.URL.match( domainRegEx );
		var pageDomain = match[3];
		var scriptMatch = SCRIPT_LOADER_URL.match( domainRegEx );
		if( match && SCRIPT_LOADER_URL[2] == 'http' || SCRIPT_LOADER_URL[2] == 'https'
				&& scriptMatch[3] != pageDomain )
		{
			ok( false, "Error: trying to test across domains, no iframe inspection is possible" + match + ' != ' + pageDomain);
			stop();
		}
		// Add entry ready listener
		document.getElementById( videoId ).addJsListener("mediaReady", "borhanQunitMediaReady");

		jsCallbackCalledId = videoId;
		if( typeof borhanPlayerLoadedCallbackCalled == 'function' ){
			borhanPlayerLoadedCallbackCalled( videoId );
		}
	});

	var mediaReadyCallbacks = [];
	var mediaReadyAlreadyCalled = false;
	// Utility function for entry ready testing handler
	window['borhanQunitMediaReady'] = function(){
		// Run in async call to ensure non-blocking build out is in dom
		setTimeout(function(){
			while( mediaReadyCallbacks.length ){
				mediaReadyCallbacks.shift()();
			}
			mediaReadyAlreadyCalled = true;
		}, 0 );
	};
	window['borhanQunitWaitForPlayer'] = function( callback ){
		if( mediaReadyAlreadyCalled ){
			callback();
			return ;
		}
		mediaReadyCallbacks.push( callback );
	};
}
