/*********************************************
* A minimal wrapper for borhan server api
* 
* Supports static requests,
* Auto includes bWidget for userKS queries ( where admin ks is not provided )
* Makes use of defined: 
* 	'Borhan.ServiceUrl', 'http://cdnapi.borhan.com' );
* 		&&
*	'Borhan.ServiceBase'
**********************************************/
(function( bWidget ){ "use strict"
if( !bWidget ){
	bWidget = window.bWidget = {};
}
bWidget.api = function( options ){
	return this.init( options );
};
bWidget.api.prototype = {
	ks: null,
	// the default api request method
	// will dictate if the CDN can cache on a per url basis
	type: 'auto',
	baseParam: {
		'apiVersion' : '3.1',
		'expiry' : '86400',
		'clientTag': 'bwidget:v' + window[ 'MWEMBED_VERSION' ],
		'format' : 9, // 9 = JSONP format
		'ignoreNull' : 1
	},
	/**
	 * Init the api object:
	 * options {Object} Set of init options
	 */
	init: function( options  ){
		for( var i in options ){
			this[i] = options[i];
		}
		// check for globals if not set, use mw.getConfig
		if( ! this.serviceUrl ){
			this.serviceUrl = mw.getConfig( 'Borhan.ServiceUrl' );
		}
		if( ! this.serviceBase ){
			this.serviceBase = mw.getConfig( 'Borhan.ServiceBase' ); 
		}
		if( ! this.statsServiceUrl ){
			this.statsServiceUrl = mw.getConfig( 'Borhan.StatsServiceUrl' );
		}
		if( typeof this.disableCache == 'undefined' ){
			this.disableCache = mw.getConfig('Borhan.NoApiCache');
		}
	},
	setKs: function( ks ){
		this.ks = ks;
	},
	getKs: function(){
		return this.ks;
	},
	/**
	 * Do an api request and get data in callback
	 */
	doRequest: function ( requestObject, callback ){
		var _this = this;
		var param = {};
		// If we have Borhan.NoApiCache flag, pass 'nocache' param to the client
		if( this.disableCache === true ) {
			param['nocache'] = 'true';
		}
		
		// Add in the base parameters:
		for( var i in this.baseParam ){
			if( typeof param[i] == 'undefined' ){
				param[i] = this.baseParam[i];
			}
		};
		// Check for "user" service queries ( no ks or wid is provided  )
		if( requestObject['service'] != 'user' ){
			bWidget.extend( param, this.handleKsServiceRequest( requestObject ) );
		} else {
			bWidget.extend( param, requestObject );
		}
		// Add kalsig to query:
		param[ 'kalsig' ] = this.hashCode( bWidget.param( param ) );
		
		// Remove service tag ( hard coded into the api url )
		var serviceType = param['service'];
		delete param['service'];

		var handleDataResult = function( data ){
			// check if the base param was a session ( then directly return the data object ) 
            data = data || [];
            if( data.length == 2 && param[ '1:service' ] == 'session' ){
				data = data[1];
			}
			// issue the local scope callback:
			if( callback ){
				callback( data );
				callback = null;
			}
		}
		// Run the request
		// NOTE borhan api server should return: 
		// Access-Control-Allow-Origin:* most browsers support this. 
		// ( old browsers with large api payloads are not supported )
		try {
			// set format to JSON ( Access-Control-Allow-Origin:* )
			param['format'] = 1;
			this.xhrRequest( _this.getApiUrl( serviceType ), param, function( data ){
				handleDataResult( data );
			});
		} catch(e){
			param['format'] = 9; // jsonp
			// build the request url: 
			var requestURL = _this.getApiUrl( serviceType ) + '&' + bWidget.param( param );
			// try with callback:
			var globalCBName = 'kapi_' + Math.abs( _this.hashCode( bWidget.param( param ) ) );
			if( window[ globalCBName ] ){
				// Update the globalCB name inx.
				this.callbackIndex++;
				globalCBName = globalCBName + this.callbackIndex;
			}
			window[ globalCBName ] = function(data){
				handleDataResult( data );
				// null out the global callback for fresh loads
				 window[globalCBName] = undefined;
				try{
					delete window[globalCBName];
				}catch( e ){}
			}
			requestURL+= '&callback=' + globalCBName;
			bWidget.appendScriptUrl( requestURL );
		}
	},
	xhrRequest: function( url, param, callback ){
		// get the request method:
		var requestMethod = this.type == "auto" ? 
				( ( bWidget.param( param ).length > 2000 ) ? 'xhrPost' : 'xhrGet' ) :
				( (  this.type == "GET" )? 'xhrGet': 'xhrPost' );
		// do the respective request
		this[ requestMethod ](  url, param, callback );
	},
	xhrGet: function( url, param, callback ){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if ( xmlhttp.readyState==4 && xmlhttp.status==200 ){
				callback( JSON.parse( xmlhttp.responseText) );
			}
		}
		xmlhttp.open("GET", url + '&' + bWidget.param( param ), true);
		xmlhttp.send();
	},
	/**
	 * Do an xhr request
	 */
	xhrPost: function( url, param, callback ){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if ( xmlhttp.readyState==4 && xmlhttp.status==200 ){
				callback( JSON.parse( xmlhttp.responseText) );
			}
		}
		xmlhttp.open("POST", url, true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send( bWidget.param( param ) );
	},
	handleKsServiceRequest: function( requestObject ){
		var param = {};
		// put the ks into the params request if set
		if( requestObject[ 'ks' ] ){
			this.ks = requestObject['ks'];
		}
		// Convert into a multi-request if no session is set ( ks will be added below )
		if( !requestObject.length && !this.getKs() ){
			requestObject = [ requestObject ];
		}
		// Check that we have a session established if not make it part of our multi-part request
		if( requestObject.length ){
			param['service'] = 'multirequest';
			param['action'] = 'null';

			// Borhan api starts with index 1 for some strange reason.
			var mulitRequestIndex = 1;
			// check if we should add a user ks
			if( !this.getKs() ){
				param[ mulitRequestIndex + ':service' ] = 'session';
				param[ mulitRequestIndex + ':action' ] = 'startWidgetSession';
				param[ mulitRequestIndex + ':widgetId'] = this.wid;
				// update the request index:
				mulitRequestIndex = 2;
			}

			for( var i = 0 ; i < requestObject.length; i++ ){
				var requestInx = mulitRequestIndex + i;
				// If ks was null always add back ref to ks:
				param[ requestInx + ':ks'] = ( this.getKs() ) ? this.getKs() : '{1:result:ks}';
				
				// MultiRequest pre-process each param with inx:param
				for( var paramKey in requestObject[i] ){
					// support multi dimension array request:
					if( typeof requestObject[i][paramKey] == 'object' ){
						for( var subParamKey in requestObject[i][paramKey] ){
							param[ requestInx + ':' + paramKey + ':' +  subParamKey ] =
								requestObject[i][paramKey][subParamKey];
						}
					} else {
						param[ requestInx + ':' + paramKey ] = requestObject[i][paramKey];
					}
				}
			}
		} else {
			param = requestObject;
			param['ks'] = this.getKs();
		}
		return param;
	},
	getApiUrl : function( serviceType ){
		var serviceUrl = this.serviceUrl;
		if( serviceType && serviceType == 'stats' && this.statsServiceUrl ) {
			serviceUrl = this.statsServiceUrl
		}
		return serviceUrl + this.serviceBase + serviceType;
	},
	hashCode: function( str ){
		var hash = 0;
		if (str.length == 0) return hash;
		for (var i = 0; i < str.length; i++) {
			var currentChar = str.charCodeAt(i);
			hash = ((hash<<5)-hash)+currentChar;
			hash = hash & hash; // Convert to 32bit integer
		}
		return hash;
	}
}

})( window.bWidget );