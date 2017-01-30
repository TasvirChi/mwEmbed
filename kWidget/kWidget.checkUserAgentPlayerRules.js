/**
 * Optional bWidget library
 * Get a user agent player rules
 * @param {Object} ruleSet Object containing the rule set and actions
 * @return {String} What player should the browser lead with:
 * 		 'flash' ( default, lead with flash) | leadWithHTML5 | forceFlash | forceMsg Raw html message string to be displayed ( instead of player )
 */
bWidget.getUserAgentPlayerRulesMsg = function( ruleSet ){
	return bWidget.checkUserAgentPlayerRules( ruleSet, true );
};
bWidget.addUserAgentRule = function( uiconfId, rule, action ){
	var ruleInx = 0;
	// if there are existing rules, get the last rule index:
	if( bWidget.userAgentPlayerRules[ uiconfId ] ){
		for (ruleInx in bWidget.userAgentPlayerRules[ uiconfId ]['rules']) ;
	} else {
		bWidget.userAgentPlayerRules[ uiconfId ] = { 'rules':{}, 'actions': {} };
	}
	var ruleIndex = parseInt( ruleInx) +1;
	// add the rule
	bWidget.userAgentPlayerRules[ uiconfId ]['rules'][ ruleIndex ] = { 'regMatch': rule };
	bWidget.userAgentPlayerRules[ uiconfId ]['actions'][ ruleIndex ] = {'mode': action, 'val': 1 };
};
bWidget.checkUserAgentPlayerRules = function( ruleSet, getMsg ){
	var ua = ( mw.getConfig( 'BorhanSupport_ForceUserAgent' ) )?
			mw.getConfig( 'BorhanSupport_ForceUserAgent' ) : navigator.userAgent;
	var flashMode = {
		mode: 'flash',
		val: true
	};

    var noFlashMessage = ( mw.getConfig( 'strings.ks-no-flash-installed' ) )?
        mw.getConfig( 'strings.ks-no-flash-installed' ) : "Flash does not appear to be installed or active. Please install or activate Flash.";

    var msgMode = {
        mode: 'forceMsg',
        val: noFlashMessage
    };
    //check if we run on IE8 and flash is not supported
    if ( bWidget.isIE8() && !bWidget.supportsFlash() ){
        return msgMode;
    }
	// Check for current user agent rules
	if( !ruleSet.rules ){
		// No rules, lead with flash
		return flashMode;
	}
	var getAction = function( inx ){
		if( ruleSet.actions && ruleSet.actions[ inx ] ){
			return ruleSet.actions[ inx ];
		}
		// No defined action for this rule, lead with flash
		return flashMode;
	};
	for( var i in ruleSet.rules ){
		var rule = ruleSet.rules[i];
		if( rule.match ){
			if( ua.indexOf( rule.match ) !== -1 )
				return getAction( i );
		} else if( rule.regMatch  ){
			// Do a regex match
			var regString = rule.regMatch.replace(/(^\/)|(\/$)/g, '');
			if( new RegExp( regString ).test( ua ) ){
				return getAction( i );
			}
		}
	}
	// No rules applied, lead with flash
	return flashMode;
};
