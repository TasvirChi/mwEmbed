/**
 * Created by einatr on 6/8/15.
 */
(function(mw, $) {
    'use strict';

    $.extend(BorhanHeartbeatPluginDelegate.prototype, ADB.va.plugins.ah.AdobeHeartbeatPluginDelegate.prototype);

    function BorhanHeartbeatPluginDelegate() {
    }

    BorhanHeartbeatPluginDelegate.prototype.onError = function(errorInfo) {
        console.log("AdobeHeartbeatPlugin error: " + errorInfo.getMessage() + " | " + errorInfo.getDetails());
    };

    // Export symbols.
    window.BorhanHeartbeatPluginDelegate = BorhanHeartbeatPluginDelegate;
})(window.mw, window.jQuery);