/**
 * Created by einatr on 6/8/15.
 */
(function(mw, $) {
    'use strict';
    $.extend(BorhanAdobeAnalyticsPluginDelegate.prototype, ADB.va.plugins.aa.AdobeAnalyticsPluginDelegate.prototype);

    function BorhanAdobeAnalyticsPluginDelegate() {
    }

    BorhanAdobeAnalyticsPluginDelegate.prototype.onError = function(errorInfo) {
        mw.log("HeartBeat plugin :: AdobeAnalyticsPlugin error: " + errorInfo.getMessage() + " | " + errorInfo.getDetails());
    };

    // Export symbols.
    window.BorhanAdobeAnalyticsPluginDelegate = BorhanAdobeAnalyticsPluginDelegate;
})(window.mw, window.jQuery);