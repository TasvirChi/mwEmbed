// TODO do we need this?  mw.setConfig('forceMobileHTML5', true);

function jsBorhanPlayerTest( videoId ){
		module('Peer5');

    window.onTestPlayerPlayed = function setPlayedOnce() {
        window.Peer5_playing = true;
    };

    var bdp = $('#' + videoId)[0];

    asyncTest('Peer5 plugin exists', function() {
        borhanQunitWaitForPlayer(function(){
            equal(bdp.evaluate('{peer5.plugin}'), true, 'Peer5 plugin exists');
            start();
        });
    });
    asyncTest('Playback has started', function() {
        borhanQunitWaitForPlayer(function() {
            bdp.addJsListener('playerPlayed', 'onTestPlayerPlayed');
					  bdp.sendNotification('doPlay');
            setTimeout(function() {
                ok(window.Peer5_playing, 'Player has started playing');
                start();
            }, 2000);  // NOTE 2s to start playing should be enough
        });
    });
}
