/**
 * Created by einatr on 6/8/15.
 */
(function(mw, $) {
    'use strict';

    $.extend(BorhanHeartbeatDelegate.prototype, ADB.va.HeartbeatDelegate.prototype);

    function BorhanHeartbeatDelegate() {
    }

    BorhanHeartbeatDelegate.prototype.onError = function(errorInfo) {
        mw.log("HeartBeat plugin ::  HeartbeatDelegate error: " + errorInfo.getMessage() + " | " + errorInfo.getDetails());
    };

    // Export symbols.
    window.BorhanHeartbeatDelegate = BorhanHeartbeatDelegate;
})(window.mw, window.jQuery);
