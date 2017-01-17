<?php 
	return array(
		'KeyFeatures'=> array(
			'title' => "Key features",
			'desc' => "Key features of the borhan front end platform.",
			'featureSets' => array(
				'Captions' => array(
					'title' => 'Accessibility and Close Captions',
					'desc' => 'The Borhan captions player API, supports S and TTML formats.',
					'testfiles' => array(
						'AccessibilityControls' => array(
							'title' => 'Accessibility Controls',
							'path' => 'BorhanSupport/tests/AccessibilityControls.html',
						),
						'KeyboardShortcuts' => array(
							'title' => 'Keyboard Shortcuts',
							'path' => 'BorhanSupport/tests/KeyboardShortcuts.html'
						),
						'CaptionsBorhanApi' => array(
							'title' => 'Captions API',
							'path' => 'BorhanSupport/tests/ClosedCaptions.html',
						),
						'Localization' => array(
							'title' => 'Player Localization',
							'path' => 'BorhanSupport/tests/Localization.il8n.html'
						),
						/*
						'InVideo Search' => array(
							'title' => 'In-Video Search',
							'path' => '',
						),*/
						'CaptionsCustomVarsTTML' => array(
							'title' => 'Captions, TTML format',
							'path' => 'BorhanSupport/tests/CaptionsCustomVarsTTML.qunit.html',
						),
						// not working with player v2:
						/*'CaptionsPlyMedia' => array(
							'title' => 'PlyMedia Captions',
							'path' => 'Plymedia/tests/Plymedia_Borhan.html',
						)*/
					)
				),
				'Live' => array(
					'title' => 'Live',
					'desc' => 'The Borhan LIVE supports sending streams to both HLS (iOS / mobile) and HDS ( flahs ).',
					'testfiles' => array(
						'LiveStream' => array(
							'title' => 'Live Stream',
							'path' => 'BorhanSupport/tests/LiveStream.html',
						),
					),
				),
				'Access_Control'=> array(
					'title' => "Access Controls",
					'desc' => 'Provides mechanism to control access to player content',
					'testfiles' => array(
						'CustomMessageAccessControlKS' => array(
							'title' => 'Custom Control Message',
							'path' => 'BorhanSupport/tests/AccessControlCustomMessage.html'
						),
						'AccessControlPreview' => array(
							'title' => 'Access Control Preview',
							'path' => 'BorhanSupport/tests/AccessControlPreview.qunit.html'
						),
						'AccessControlPlaylistBlockMobileFirstEntry' => array(
							'title' => 'Playlist Block Entry',
							'path' => 'BorhanSupport/tests/AccessControlPlaylistBlockMobileFirstEntry.qunit.html'
						)
					)
				),
				'Playlists'=> array(
					'title' => "Playlists",
					'desc' => 'Playlists support is built into the borhan player',
					'testfiles' => array(
						'playlistApi' => array(
							'title' => 'Playlist API',
							'path' => 'BorhanSupport/tests/PlaylistBorhanApi.qunit.html'
						),
						'ServerSidePlaylist' => array(
							'title' => "Server Side Playlist",
							'path' => '../bWidget/onPagePlugins/serverSidePlaylist/ServerSidePlaylist.php'
						),
						'PlaylistFeatures' => array(
							'title' => "Playlist features",
							'path' => 'BorhanSupport/tests/PlaylistFeatures.qunit.html'
						),
						'PlaylistEvents' => array(
							'title' => "Playlist events",
							'path' => 'BorhanSupport/tests/PlaylistEvents.qunit.html'
						),
						'PlaylistOnPage' => array(
							'title' => "Playlist on page",
							'path' => 'BorhanSupport/tests/PlaylistOnPage.qunit.html'
						),
						'PlaylistNoClipList' => array(
							'title' => "Playlist No Clip List",
							'path' => 'BorhanSupport/tests/PlaylistNoClipList.qunit.html'
						),
						'PlaylistBorhanMRSS' => array(
							'title' => "Media RSS source",
							'path' => 'BorhanSupport/tests/PlaylistBorhanMRSS.qunit.html'
						),
						'PlaylistInitItemEntryId' => array(
							'title' => "Initial EntryId",
							'path' => 'BorhanSupport/tests/PlaylistInitItemEntryId.qunit.html'
						),
						'PlaylistVAST' => array(
							'title' => "Playlist VAST ads",
							'path' => 'BorhanSupport/tests/PlaylistVAST.qunit.html'
						),
						'PlaylistDoubleclick' => array(
							'title' => "Playlist Doubleclick ads",
							'path' => 'BorhanSupport/tests/PlaylistDoubleclick.qunit.html'
						),
                        'PlaylistSideBar' => array(
                            'title' => "Playlist within side bar",
                            'path' => 'BorhanSupport/tests/PlaylistSideBar.qunit.html'
                        )
					)
				),
			)
		),
		'Plugins'=> array(
			'title' => "Plugins",
			'desc' => "Leverage 3rd party services to enhance player capabilities",
			'featureSets' => array(
				'Ads' => array(
					'title' => "Monetization",
					'desc' => 'The Borhan player supports several systems for video monitization.',
					'testfiles' => array(
						'kvast' => array(
							'title' => 'VAST Preroll & Companion',
							'path' => 'BorhanSupport/tests/AdFlashvarVastDoubleClickCompanion.qunit.html'
						),
						'vpaid' => array(
							'title' => 'VPAID',
							'path' => 'AdSupport/tests/VPAID.html'
						),
						'AdPatterns'=>array(
							'title' => 'Ad Patterns Playlist',
							'path' => 'BorhanSupport/tests/AdPatternPlaylist.qunit.html'
						),
						'VastAdPods' => array(
							'title' => 'VAST 3 Ad Pods',
							'path' => 'BorhanSupport/tests/AdPodsVast3.html'
						),
						'kbumper' => array(
							'title' => 'Bumper video',
							'path' => 'BorhanSupport/tests/BumperVideoNoAdd.qunit.html'
						),
						'kcuepoints' => array(
							'title' => 'Borhan Ad Cue Points',
							'path' => 'BorhanSupport/tests/CuePointsMidrollVast.html'
						),
						'DoubleClick' => array(
							'title' => "DoubleClick",
							'path' => 'DoubleClick/tests/DoubleClickManagedPlayerAdApi.qunit.html'
						),
						'FreeWheel' => array(
							'title' => "FreeWheel",
							'path' => 'FreeWheel/tests/FreeWheelPlayer.html'
						),
						'Tremor' => array(
							'title' => "Tremor",
							'path' => 'Tremor/tests/TremorPrerollPostroll.qunit.html'
						),
					)
				),
				
				'Analytics' => array(
					'title' => 'Analytics',
					'desc' => 'The Borhan player supports several systems for tracking video playback',
					'testfiles' => array(
						'BorhanAnalytics' => array( 
							'title' => 'Borhan Analytics',
							'path' => 'BorhanSupport/tests/BorhanAnalytics.qunit.html',
						),
						'AkamaiAnalytics' => array( 
							'title' => 'Akamai Analytics',
							'path' => 'AkamaiAnalytics/tests/AkamaiAnalytics.qunit.html',
						),
						'GoogleAnalytics' => array(
							'title' => 'Google Analytics',
							'path' => 'GoogleAnalytics/tests/GoogleAnalytics.qunit.html',
						),
						'NielsenVideoCensus' => array(
							'title' => 'Nielsen VideoCensus',
							'path' => 'NielsenVideoCensus/tests/ShortFromNielsenVideoCensus.html',
						),
						'ComscoreAnalytics' => array(
							'title' => 'Comscore Analytics',
							'path' => 'Comscore/tests/Comscore.html',
						),
						'NielsenCombined' => array(
							'title' => 'Nielsen Combined',
							'path' => 'NielsenCombined/tests/NielsenCombinedPlayer.qunit.html',
						),
						'NielsenCombinedFreeWheel' => array(
							'title' => 'Nielsen Combined & FreeWheel',
							'path' => 'NielsenCombined/tests/IntegrationFreeWheelNielsen.html',
						),
						'OmnitureOnPage' => array(
							'title' => 'Omniture sCode config',
							'path' => '../bWidget/onPagePlugins/omnitureOnPage/OmnitureOnPage.qunit.html',
						),
						/*'OmnitureSiteCatalyst15' => array(
							'title' => 'Omniture manual config',
							'path' => 'Omniture/tests/siteCatalyst15.qunit.html',
						)*/
					),
				),
				'On_Page_Plugins' => array(
					'title' => 'Engagement',
					'desc' => 'On page widgets load the same plugin for both flash and HTML5',
					'testfiles' => array(
						'chaptersView' => array(
							'title' => 'Chapters',
							'path' => '../bWidget/onPagePlugins/chapters/chaptersView.qunit.html'
						),
						'chaptersEdit' => array(
							'title' => 'Chapters Editor',
							'path' => '../bWidget/onPagePlugins/chapters/chaptersEdit.qunit.html'
						),
						/*'AttracTV' => array(
							'title' => 'AttracTV',
							'path' => 'AttracTV/tests/AttracTV.qunit.html'
						),*/
						'LimeSurvey' => array(
							'title' => 'LimeSurvey On Video',
							'path' => '../bWidget/onPagePlugins/limeSurveyCuePointForms/limeSurveyCuePointForms.qunit.html'
						),
						'videoDetailsBlock' => array(
							'title' => 'Video Details Block',
							'path' => '../bWidget/onPagePlugins/videoDetailsBlock/videoDetailsBlock.qunit.html'
						),
					)
				),
				'CallToAction' => array(
					'title' => 'Call To Action',
					'desc' => 'Call to action plugins.',
					'testfiles' => array(
						'ActionButtons' => array(
							'title' => 'Basic Buttons',
							'path' => 'CallToAction/tests/ActionButtons.qunit.html'
						),
						'RelatedButtons' => array(
							'title' => 'Related Buttons',
							'path' => 'CallToAction/tests/ActionButtonsRelated.qunit.html'
						),
						'ActionForm' => array(
							'title' => 'Submit Form',
							'path' => 'CallToAction/tests/ActionForm.qunit.html'
						),
					)
				),
				'Transport' => array(
					'title' => 'Transport',
					'desc' => 'These plugins help optimize video delivery',
					'testfiles' => array(
						'Peer5' => array( 
							'title' => 'Peer5 HTML5 P2P',
							'path' => 'Peer5/tests/Peer5.qunit.html',
						),
					)
				),
			)
		),
		'Customization' => array(
			'title' => "Customization",
			'desc' => "Tools for customizing the look and feel of the player and on-page display",
			'featureSets' => array(
				'Custom_Players' => array(
					'title' => "Player Appearance",
					'desc' => 'The Borhan supports loading external CSS and JS to customize players look and feel',
					'testfiles' => array(
						'ExternalResources' => array(
							'title' => 'External Resources',
							'path' => 'BorhanSupport/tests/ExternalResources.qunit.html'
						),
						'Chromeless' => array(
							'title' => 'Chromeless No Controls',
							'path' => 'BorhanSupport/tests/ChromelessPlayer.qunit.html'
						),
						'Strings' => array(
							'title' => 'Custom Strings',
							'path' => 'BorhanSupport/tests/Strings.html'
						),/*
						'CustomSkinAudioPlayer' => array(
							'title' => 'Custom Audio Player Skin',
							'path' => 'BorhanSupport/tests/CustomSkinAudioPlayer.html'
						)*/
					)
				),
				
				'Player_Features' => array(
					'title' => "Player features",
					'desc' => 'Player features',
					'testfiles' => array(
						'Watermark' => array(
							'title' => 'Player Watermark',
							'path' => 'BorhanSupport/tests/WatermarkTest.qunit.html'
						),
						'branding' => array(
							'title' => 'Custom Branding',
							'path' => 'BorhanSupport/tests/branding.html'
						),
						'TitleLabel' => array(
							'title' => 'Title Label',
							'path' => 'BorhanSupport/tests/TitleLabel.qunit.html'
						),
						'Share' => array(
							'title' => 'Share',
							'path' => 'BorhanSupport/components/share/Share.html'
						),
						'Info' => array(
							'title' => 'Info',
							'path' => 'BorhanSupport/components/info/Info.html'
						),
						'Related' => array(
							'title' => 'Related',
							'path' => 'BorhanSupport/components/related/Related.html'
						),
						'FlavorSelector' => array(
							'title' => 'Flavor Selection',
							'path' => 'BorhanSupport/tests/FlavorSelector.preferedFlavorBR.qunit.html'
						),
						'PlaybackRateSelector' => array(
							'title' => "Playback Rate Selector",
							'path' => 'BorhanSupport/tests/PlaybackRate.qunit.html'
						)
					)
				),
			) 
		),
		'Tools' => array(
			'title' => "Integration tools",
			'desc' => "Front end tools from embedding content, api helpers and sample integration code",
			'featureSets' => array(
		
				'Embedding'  => array(
					'title' => 'Embedding the Borhan player',
					'desc' => 'These files cover basic embedding from <a href="#rewrite">legacy</a> object embed, to the dynamic <a href="#bwidget">bWidget</a> embed method', 
					'testfiles' =>array(
						'bwidget' => array(
							'title' => 'Dynamic embed',
							'path' => 'BorhanSupport/tests/bWidget.embed.qunit.html'
						),
						'autoEmbed' => array(
							'title' => 'Auto embed',
							'path' => 'BorhanSupport/tests/AutoEmbed.html'
						),
						'thumb' => array( 
							'title' => 'Thumbnail embed',
							'path' => 'BorhanSupport/tests/ThumbnailEmbedManyPlayers.qunit.html',
						),
						'responsive' => array(
							'title' => "Responsive embed",
							'path' => 'BorhanSupport/tests/RWDMinimal.html',
						),
						'NativeCallout'=> array(
							'title' => 'Native callout',
							'path' => 'BorhanSupport/tests/NativeCalloutComingSoon.html',
						),
						'referenceId' => array(
							'title' => 'Reference Id',
							'path' => 'BorhanSupport/tests/ReferenceId.html'
						),
						'bwidgetPlaylist' => array( 
							'title' => 'bWidget playlist',
							'path' => 'BorhanSupport/tests/bWidget.embed.playlist.qunit.html'
		 				),
						'rewrite' => array(
							'title' => 'Object rewrite ( legacy )',
							'path' => 'BorhanSupport/tests/BasicPlayer.qunit.html'
						),
		 				'swfObject' => array(
		 					'title' => 'swfObject ( legacy )', 
							'path' => 'BorhanSupport/tests/EmbedSWFObject.2.2.qunit.html'
		 				),
						'Flashembed' => array(
		 					'title' => 'flashembed ( legacy )', 
							'path' => 'BorhanSupport/tests/Flashembed.onPageLinks.qunit.html'
						),
						'PlayerRules' => array(
							'title' => 'Player Rules',
							'path' => 'BorhanSupport/tests/UserAgentPlayerRules.html'
						)
		 			)
				), // Embedding
				
				
				'Player_API' => array(
					'title' => "Player API",
					'desc' => 'The Borhan player includes a robust API to build custom media experiences.',
					'testfiles' => array(
						'kbind' => array(
							'title' => 'kBind and kUnbind',
							'path' => 'BorhanSupport/tests/kBind_kUnbind.qunit.html'
						),
						'changeMedia' => array(
							'title' => 'Change Media Entry',
							'path' => 'BorhanSupport/tests/ChangeMediaEntry.qunit.html'
						),
						'BufferEvents' => array(
							'title' => 'Buffer Events',
							'path' => 'BorhanSupport/tests/BufferEvents.qunit.html'
						),
						'SeekApi' => array(
							'title' => 'Seek Api', 
							'path' => 'BorhanSupport/tests/SeekApi.qunit.html'
						),
						'StartEndPreview' => array(
							'title' => "Start End Preview",
							'path' => 'BorhanSupport/tests/PlayFromOffsetStartTimeToEndTime.html'
						),
						'CustomMetaData' => array( 
							'title' => 'Access Custom Meta Data',
							'path' => 'BorhanSupport/tests/CustomMetaData.html'
						),
						'showAlert' =>  array(
							'title' => 'Show Alert',
							'path' => 'BorhanSupport/tests/showAlert.html'
						),
						'AutoPlay' => array(
							'title' => 'Auto play',
							'path' => 'BorhanSupport/tests/AutoPlay.qunit.html'
						)
					)
				),
				
				'Stand_Alone_Tools' => array(
					'title' => 'Stand alone tools',
					'desc' => 'Stand alone tools',
					'testfiles' => array(
						'getSources' => array(
							'title' => 'Get Flavor Urls',
							'path' => '../bWidget/tests/bWidget.getSources.html',
						),
						'selfHostedSources' => array(
							'title' => 'Self Hosted Player Sources',
							'path' => 'EmbedPlayer/tests/Player_Sources.html'
						),
					)
				),
			)
		)
	);
