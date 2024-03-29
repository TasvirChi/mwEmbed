(function (mw, $) {
    "use strict";

    var tvpapiAPI = mw.KBasePlugin.extend( {

        setup: function ( ) {
            this.addBindings();
        },

        getProxyConfig: function( attr, raw ) {
            if( raw ){
                return this.embedPlayer.getRawBorhanConfig( "proxyData", attr );
            }
            return this.embedPlayer.getBorhanConfig( "proxyData", attr );
        },
        setProxyConfig: function( attr, value ) {
            this.embedPlayer.setBorhanConfig("proxyData", attr, value);
        },

        addBindings: function () {
            var _this = this;
            this.bind("renewTvpapiToken", function(event, token){
                _this.renewTvpapiToken(token);
            });
        },
        renewTvpapiToken: function(token){
            var initObj = this.getProxyConfig("initObj");
            initObj.Token = token;
            this.setProxyConfig("initObj", initObj);
        }
    });
    mw.PluginManager.add( 'tvpapiAPI', tvpapiAPI);
})(window.mw, window.jQuery);
