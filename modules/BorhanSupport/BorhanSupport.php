<?php
	// Return the BorhanSupport modules 
	return array(
		"mw.BorhanIframePlayerSetup" =>  array( 
			'scripts' => "resources/mw.BorhanIframePlayerSetup.js",
			'dependencies' => array(
				'mw.MwEmbedSupport'
			),
			'borhanLoad' => 'always'
		),
		"mw.BWidgetSupport" => array( 
			'scripts' => "resources/mw.BWidgetSupport.js",
			'dependencies' => array(
				'base64_encode',
				'matchMedia',
				'mw.KApi',
				'mw.BDPMapping',
				'mw.KCuePoints'
			),
			'borhanLoad' => 'always',
			'messageFile' => 'BorhanSupport.i18n.php'
		),
		"mw.KBaseScreen" => array(
			'scripts' => "resources/mw.KBaseScreen.js",
			'dependencies' => array( 'mw.KBaseComponent' )
		),
		"mw.KBaseComponent" => array(
			'scripts' => "resources/mw.KBaseComponent.js",
			'dependencies' => array( 'mw.KBasePlugin', 'mediawiki.kmenu' )
		),
		"mw.KBaseButton" => array(
			'scripts' => "resources/mw.KBaseButton.js",
			'dependencies' => array( 'mw.KBaseComponent')
		),
		"mw.KBasePlugin" => array(
			'scripts' => "resources/mw.KBasePlugin.js",
			'dependencies' => array( 'class', 'mw.PluginManager', 'mediawiki.util.tmpl' )
		),
		"mw.KCuePoints"=> array( 
			'scripts' => "resources/mw.KCuePoints.js" 
		),
		"mw.KTimedText"=> array( 
			'scripts' => "resources/mw.KTimedText.js" 
		),
		"mw.KAnalytics"=> array( 
			'scripts' => "resources/mw.KAnalytics.js"
		),
		"mw.PlaylistHandlerBorhan"=> array( 
			'scripts' => "resources/mw.PlaylistHandlerBorhan.js",
			'dependencies' => array(
				'mw.MwEmbedSupport'
			)
		), 
		"mw.BDPMapping"=> array(
			'scripts' => "resources/mw.BDPMapping.js",
		),
		"mw.KApi"=> array(
			'scripts' => "resources/mw.KApi.js", 
			'dependencies' => array(
				'MD5'
			)	
		),
		"mw.KAds"=> array( 
			'scripts' => "resources/mw.KAds.js",
			'dependencies' => array(
				"mw.AdTimeline",
				"mw.KAdPlayer"
			)
		),
		"mw.KAdPlayer"=> array( 
			'scripts' => "resources/mw.KAdPlayer.js" 
		),
		"dualScreen" => array(
		    'scripts' => "components/dualScreen/dualScreen.js",
		    'styles' =>  "components/dualScreen/displayControlBar.css",
		    'templates' => "components/dualScreen/displayControlBar.tmpl.html",
		    'dependencies' => array( 'mw.KBaseComponent', 'jquery.ui.draggable', 'jquery.ui.resizable' ),
		    'borhanPluginName' => 'dualScreen'
        ),
        "search" => array(
            'scripts' => "components/search/search.js",
            'styles' =>  "components/search/search.css",
            'templates' => "components/search/search.tmpl.html",
            'dependencies' => array( 'mw.KBaseComponent' ),
            'borhanPluginName' => 'search'
        ),
        "mediaList" => array(
            'scripts' => "components/mediaList/mediaList.js",
            'styles' =>  "components/mediaList/mediaList.css",
            'templates' => "components/mediaList/mediaList.tmpl.html",
            'dependencies' => array( 'mw.KBaseComponent', 'jCarouse' ),
            'borhanPluginName' => 'mediaList'
        ),
		/* Core plugins */
		"keyboardShortcuts" => array(
			'scripts' => "resources/mw.KeyboardShortcuts.js",
			'dependencies' => 'mw.KBasePlugin',
			'borhanLoad' => 'always'			
		),
		/* Layout Container */
		"controlBarContainer" => array(
			'scripts' => "components/controlBarContainer.js",
			'dependencies' => 'mw.KBasePlugin',
			'borhanLoad' => 'always'
		),
		"topBarContainer" => array(
			'scripts' => "components/topBarContainer.js",
			'dependencies' => 'mw.KBasePlugin',
			'borhanLoad' => 'always'
		),
		"sideBarContainer" => array(
            'scripts' => "components/sideBarContainer.js",
            'dependencies' => 'mw.KBasePlugin',
            'borhanLoad' => 'always'
        ),
		/** 
		 * Layout Components 
		 **/
		"theme" => array(
			'scripts' => "components/theme.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'theme',
		),
		"largePlayBtn" => array(
			'scripts' => "components/largePlayBtn.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'largePlayBtn',
		),	
		"playPauseBtn" => array(
			'scripts' => "components/playPauseBtn.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'playPauseBtn',
		),
		"fullScreenBtn" => array(
			'scripts' => "components/fullScreenBtn.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'fullScreenBtn',
		),
		"expandToggleBtn" =>array(
			'scripts' => "components/expandToggleBtn.js",
	        'dependencies' => 'mw.KBaseButton',
	        'borhanPluginName' => 'expandToggleBtn',
		),
		"scrubber" => array(
			'scripts' => "components/scrubber.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'scrubber',
		),
		"volumeControl" => array(
			'scripts' => "components/volumeControl.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'volumeControl',
		),
		"accessibilityButtons" => array(
			'scripts' => "components/accessibilityButtons.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'accessibilityButtons',
		),
		"currentTimeLabel" => array(
			'scripts' => "components/currentTimeLabel.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'currentTimeLabel',
		),				
		"durationLabel" => array(
			'scripts' => "components/durationLabel.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'durationLabel',
		),
		"sourceSelector" => array(
			'scripts' => "components/sourceSelector.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'sourceSelector',
		),
		"logo" => array(
			'scripts' => "components/logo.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'logo',
		),
		"closeFSMobile" => array(
			'scripts' => "components/closeFSMobile.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'closeFSMobile',
		),
		"airPlay" => array(
			'scripts' => "components/airPlay.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'airPlay',
		),
		"closedCaptions" => array(
			'scripts' => "resources/mw.ClosedCaptions.js",
			'dependencies' => array( 
				'mw.KBaseComponent', 
				'mw.TextSource',
				'mw.Language.names' 
			),
			'borhanPluginName' => 'closedCaptions',
			'messageFile' => '../TimedText/TimedText.i18n.php',
		),
		"infoScreen" => array(
			'scripts' => "components/info/info.js",
			'templates' => "components/info/info.tmpl.html",
			'dependencies' => array( 'mw.KBaseScreen' ),
			'borhanPluginName' => 'infoScreen',
		),
		"related" => array(
			'scripts' => "components/related/related.js",
			'styles' => "components/related/related.css",
			'templates' => "components/related/related.tmpl.html",
			'dependencies' => array( 'mw.KBaseScreen' ),
			'borhanPluginName' => 'related',
		),
		"share" => array(
			'scripts' => "components/share/share.js",
			'styles' =>  "components/share/share.css",
			'templates' => "components/share/share.tmpl.html",
			'dependencies' => array( 'mw.KBaseScreen' ),
			'borhanPluginName' => 'share',
		),

		"pptWidgetPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/pptWidgetPlugin.js",
			'borhanPluginName' => 'pptWidgetAPI'
		),

		/* playlist */
		"playlistPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/playlistPlugin.js", 
			'dependencies' => array(
				// core playlist module
				"mw.Playlist",
				// borhan specific playlist modules
				'mw.PlaylistHandlerBorhan',
				// support playlist layout
				'mw.KLayout'
			),
			'borhanPluginName' => 'playlistAPI'
		),
		
		/* uiConf based plugins */
		"acCheck" => array(
			'scripts' => "resources/uiConfComponents/acCheck.js",
			// We always should load access controls since 
			// it can be invoked per entry . 
			'borhanLoad' => 'always'
		),
		"acPreview"=> array( 
			'scripts' => "resources/uiConfComponents/acPreview.js",
			// We always should load access controls since 
			// it can be invoked per entry 
			'borhanLoad' => 'always'
		),
		"bumperPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/bumperPlugin.js",
			'dependencies' => array( 'mw.KAds' ),
			'borhanPluginName' => 'bumper'
		),
		"captureThumbnailPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/captureThumbnailPlugin.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'captureThumbnail' 
		),
		"carouselPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/carouselPlugin.js",
			'dependencies' => array( 'jCarouse' ),
			'borhanPluginName' => array(
				'related',
				'carousel'
			)
		),
		"likeAPIPlugin" => array(
			'scripts' => "resources/uiConfComponents/likeAPIPlugin.js", 
			'borhanPluginName' => 'likeAPI'
		),
		"liveStream" => array(
			'scripts' => array(
				"components/live/liveCore.js", // Will run API requests for isLive service and trigger events ( extends mw.KBasePlugin )
				"components/live/liveStatus.js", // Live status components  ( extends mw.KBaseComponent )
				"components/live/liveBackBtn.js" // Back to live button ( extends mw.KBaseComponent )
			),
			'styles' => 'components/live/liveStream.css',
			'dependencies' => 'mw.KBaseComponent',
			'borhanLoad' => 'always'
		),
		"titleLabel"=> array( 
			'scripts' => "resources/uiConfComponents/titleLabel.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'titleLabel'
		),		
		"shareSnippet"=> array( 
			'scripts' => "resources/uiConfComponents/shareSnippet.js", 
			'borhanPluginName' => 'shareSnippet'
		),
		"moderationPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/moderationPlugin.js",
			'dependencies' =>  array( 'mw.KBaseScreen' ),
			'borhanPluginName' => 'moderation'
		),
		"downloadPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/downloadPlugin.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => "download"
		),
		"jCarouse"=> array( 
			'scripts' => "resources/uiConfComponents/jcarousellite_1.0.1.js" 
		),
		"mw.KLayout"=> array( 
			'scripts' => "resources/mw.KLayout.js" 
		),
		"restrictUserAgentPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/restrictUserAgentPlugin.js",
			'dependencies' => 'mw.KBasePlugin',
			'borhanPluginName' => 'restrictUserAgent' 
		),
		"segmentScrubberPlugin" => array(
			'scripts' => "resources/uiConfComponents/segmentScrubberPlugin.js",
			'dependencies' => 'mw.KBasePlugin',
			'borhanPluginName' => 'segmentScrubber',
		),
		"statisticsPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/statisticsPlugin.js",
			'dependencies' => array( 'mw.KAnalytics' ), 
			'borhanPluginName' => 'statistics'
		),
		'playbackRateSelectorPlugin' => array(
			'scripts' => "resources/uiConfComponents/playbackRateSelector.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'playbackRateSelector'
		),
		"watermarkPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/watermarkPlugin.js",
			'dependencies' => 'mw.KBaseComponent',
			'borhanPluginName' => 'watermark'
		),
		"vastPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/vastPlugin.js",
			'dependencies' => array(
				"mw.KAds"
			),
			'borhanPluginName' => 'vast'
		),
		"audioDescription" => array(
				'scripts' => "components/audioDescription.js",
				'dependencies' => 'mw.KBaseComponent',
				'borhanPluginName' => 'audioDescription'
		),
	);