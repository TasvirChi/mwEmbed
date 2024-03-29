/**
 * A few mwEmbed utilities used on the page side.
 */

// The version of this script
var logIfInIframe = ( typeof preMwEmbedConfig != 'undefined' && preMwEmbedConfig['EmbedPlayer.IsIframeServer'] ) ? ' ( iframe ) ': '';
bWidget.log( 'Borhan HTML5 Version: ' + MWEMBED_VERSION  + logIfInIframe );

// Define mw ( if not already set )
if( !window['mw'] ) {
	window['mw'] = {};
}

// Setup preMwEmbedReady queue
if( !window['preMwEmbedReady'] ){
	window.preMwEmbedReady = [];
}

// Setup preMwEmbedConfig if not set:
if( !window['preMwEmbedConfig'] ) {
	window.preMwEmbedConfig = {};
}

// Support mw.setConfig for setting configuration
if( ! mw.setConfig ){
	mw.setConfig = function( set, value ){
		var valueQueue = {};
		if( typeof value != 'undefined'  ) {
			window.preMwEmbedConfig[ set ] = value;
		} else if ( typeof set == 'object' ){
			for( var i in set ){
				window.preMwEmbedConfig[ i ] = set[i];
			}
		}
	};
}

// Support mw.getConfig for getting configuration
if( ! mw.getConfig ){
	mw.getConfig = function ( key, defaultValue ){
		if( typeof window.preMwEmbedConfig[ key ] == 'undefined' ){
			if( typeof defaultValue != 'undefined' ){
				return defaultValue;
			}
			return null;
		} else {
			return window.preMwEmbedConfig[ key ];
		}
	};
}
/**
 * A version comparison utility function Handles version of types
 * {Major}.{MinorN}.{Patch}
 *
 * @param {String}
 *		minVersion Minimum version needed
 * @param {String}
 *		clientVersion Client version to be checked
 *
 * @return true if the version is at least of minVersion false if the
 *		version is less than minVersion
 */

if( ! mw.versionIsAtLeast ){
	mw.versionIsAtLeast = function( minVersion, clientVersion ) {
		if( typeof clientVersion == 'undefined' ){
			clientVersion = window.MWEMBED_VERSION;
		}
		// strip all non-numeric values from both strings: 
		minVersion = minVersion.replace(/[^\d.-]/g, '');
		clientVersion = clientVersion.replace(/[^\d.-]/g, '');
		var minVersionParts = minVersion.split('.');
		var clientVersionParts = clientVersion.split('.');
		for( var i =0; i < minVersionParts.length; i++ ) {
			if( parseInt( clientVersionParts[i] ) > parseInt( minVersionParts[i] ) ) {
				return true;
			}
			if( parseInt( clientVersionParts[i] ) < parseInt( minVersionParts[i] ) ) {
				return false;
			}
		}
		// Same version:
		return true;
	};
}
// Wrap mw.ready to preMwEmbedReady values
if( !mw.ready ){
	mw.ready = function( fn ){
		window.preMwEmbedReady.push( fn );
	};
}

/**
 *  getBorhanThumbUrl is now supported via bWidget.getBorhanThumbUrl
 */
mw.getBorhanThumbUrl = function( entry ){
	bWidget.log( 'mw.getBorhanThumbUrl is deprecated. Please use bWidget.getBorhanThumbUrl' );
	return bWidget.getBorhanThumbUrl( entry );
};

