<?php 
/**
 * This file stores default settings for Borhan html5 client library "mwEmbed"
 * 
 * DO NOT MODIFY THIS FILE. Instead modify LocalSettings.php in the parent mwEmbd directory.
 *
 */

if (isset($_SERVER["HTTP_X_FORWARDED_HOST"]))
{
    // support multiple hosts (comma separated) in HTTP_X_FORWARDED_HOST
    $xForwardedHosts = explode(',', $_SERVER['HTTP_X_FORWARDED_HOST']);
    $_SERVER["HTTP_HOST"] = $xForwardedHosts[0];
    $_SERVER["SERVER_NAME"] = $xForwardedHosts[0];
}

// The default cache directory
$wgScriptCacheDirectory = realpath( dirname( __FILE__ ) ) . '/cache';

$wgBaseMwEmbedPath = realpath( dirname( __FILE__ ) . '/../' );

// The version of the library:
$wgMwEmbedVersion = '2.47';

// Default HTTP protocol from GET or SERVER parameters
if( isset($_GET['protocol']) ) {
	$wgHTTPProtocol = ($_GET['protocol'] == 'https') ? 'https' : 'http';
} else {
	$wgHTTPProtocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';
}
// By default set timezone to UTC:
date_default_timezone_set('UTC');

/**
 * Set the resource loader path to load.php based on server env.
 */
$wgServerPort = (($_SERVER['SERVER_PORT']) != '80' && $_SERVER['SERVER_PORT'] != '443')?':'.$_SERVER['SERVER_PORT']:'';
$wgServer = $wgHTTPProtocol . '://' . $_SERVER['SERVER_NAME'] .$wgServerPort. dirname( dirname( $_SERVER['SCRIPT_NAME'] ) ) .'/';

$psRelativePath = '../bwidget-ps/';


// By default set $wgScriptPath to empty
$wgScriptPath = basename(dirname($_SERVER['SCRIPT_NAME'])) . '/';

// Default Load Script path
$wgLoadScript = $wgServer . $wgScriptPath . 'load.php';

// Support legacy $wgResourceLoaderUrl url.
$wgResourceLoaderUrl = $wgLoadScript;

// The list of enabled modules
// Added two base modules that must be included before others
$wgMwEmbedEnabledModules = array( 'EmbedPlayer', 'BorhanSupport' );

// By default we enable every module in the "modules" folder
// Modules are registered after localsettings.php to give a chance
// for local configuration to override the set of enabled modules
$d = dir( realpath( dirname( __FILE__ ) )  . '/../modules' );
while (false !== ($entry = $d->read())) {
	if( substr( $entry, 0, 1 ) != '.' && !in_array( $entry , $wgMwEmbedEnabledModules ) ){
		$wgMwEmbedEnabledModules[] = $entry;
	}
}

// Default debug mode
$wgEnableScriptDebug = false;

// The documentation hub makes use of git info for author and file modify time
// $wgRepoPath allows you to provide a repo path to get this info
// by default $wgRepoPath is false, and git checks are ignored.
// in local settings when developing can set it to  dirname( __FILE__ );
$wgGitRepoPath = false;

// $wgMwEmbedModuleConfig allow setting of any mwEmbed configuration variable
// ie $wgMwEmbedModuleConfig['ModuleName.Foo'] = 'bar';
// For list of configuration variables see the .conf file in any given mwEmbed module
$wgMwEmbedModuleConfig = array();

// A special variable to note the stand alone resource loader mode:
$wgStandAloneResourceLoaderMode = true;

/**
 * Client-side resource modules.
 */
$wgResourceModules = array();

/* Default skin can be any jquery based skin */
$wgDefaultSkin = 'no-theme';

// If the resource loader is in 'debug mode'
$wgResourceLoaderDebug = false;

// If the resource loader should minify vertical space
$wgResourceLoaderMinifyJSVerticalSpace = false;


$wgMwEmbedProxyUrl =  $wgServer . $wgScriptPath . 'simplePhpXMLProxy.php';

/**
 * Maximum time in seconds to cache resources served by the resource loader
 */
$wgResourceLoaderMaxage = array(
	'versioned' => array(
		// Squid/Varnish but also any other public proxy cache between the client and MediaWiki
		'server' => 30 * 24 * 60 * 60, // 30 days
		// On the client side (e.g. in the browser cache).
		'client' => 30 * 24 * 60 * 60, // 30 days
	),
	'unversioned' => array(
		'server' => 60 * 60, // 1 hour
		'client' => 60 * 60, // 1 hour
	),
);
/***
 * External module config: 
 */
$wgExternalPlayersSupportedTypes = array('YouTube');

/*********************************************************
 * Default Borhan Configuration: 
 * TODO move borhan configuration to BorhanSupport module ( part of New ResourceLoader update ) 
 ********************************************************/

//Embedded services
//To enable service re routing for entryResult calls
$wgEnableBorhanEmbedServicesRouting = true;

// To include signed headers with user IPs for IP restriction lookups, input a salt string for 
// $wgBorhanRemoteAddressSalt configuration option. 
$wgBorhanRemoteAddressSalt = false;

// If we should check for onPage resources per the external resources plugin
$wgBorhanEnableEmbedUiConfJs = false;

// Enables the result cache while in debug mode 
// This enables fast player rendering while scripts remain unminifed. 
// ( normally $wgEnableScriptDebug disables result cache )
$wgBorhanForceResultCache = false;

// For force ip testing geo restrictions
$wgBorhanForceIP = false;

// To test sites with referre restrictions: 
$wgBorhanForceReferer = false;

// The default Borhan service url:
$wgBorhanServiceUrl = 'http://cdnapi.borhan.com';
// if https use cdnsecakmi
if( $wgHTTPProtocol == 'https' ){
	$wgBorhanServiceUrl =  'https://cdnapisec.borhan.com';
}

// Default Borhan CDN url: 
$wgBorhanCDNUrl = 'http://cdnbakmi.borhan.com';
// if https use cdnsecakmi
if( $wgHTTPProtocol == 'https' ){
	$wgBorhanCDNUrl =  'https://cdnsecakmi.borhan.com';
}

// Default Borhan Stats url
$wgBorhanStatsServiceUrl = 'http://stats.borhan.com';
if( $wgHTTPProtocol == 'https' ){
	$wgBorhanStatsServiceUrl = 'https://www.borhan.com';
}

// Default Borhan service url:
$wgBorhanServiceBase = '/api_v3/index.php?service=';

// Log Api Request
$wgLogApiRequests = false;

// Default CDN Asset Path
$wgCDNAssetPath = $wgHTTPProtocol . '://' . $_SERVER['HTTP_HOST'];

// Default api request timeout in seconds 
$wgBorhanServiceTimeout = 20;

// If the iframe will accept 3rd party domain remote service requests 
// should be left "off" in production. 
$wgBorhanAllowIframeRemoteService = false;

// Default expire time for ui conf api queries in seconds 
$wgBorhanUiConfCacheTime = 60*10; // 10 min

// Cache errors for 30 seconds to avoid overloading apaches in CDN setups
$wgBorhanErrorCacheTime = 30;

// By default enable the iframe rewrite
$wgBorhanIframeRewrite = true;

$wgEnableIpadHTMLControls = true;

$wgBorhanUseManifestUrls = true;

// The admin secret should be set to an integration admin secret key for testing 
// api actions that require admin rights, like granting a ks for preview / play:
$wgBorhanAdminSecret = null;

// By default do allow custom resource includes. 
$wgAllowCustomResourceIncludes = true;

// An array of partner ids for which apple adaptive should be disabled. 
$wgBorhanPartnerDisableAppleAdaptive = array();

// By default use apple adaptive if we have the ability
$wgBorhanUseAppleAdaptive = true;

/********************************************************
 *  Authentication configuration variables
 *******************************************************/
// If the borhan authentication should run on https ( true by default )
$wgBorhanAuthHTTPS = true;
// What domains are allowed to host the auth page:
$wgBorhanAuthDomains = array( 'www.borhan.com', 'bmc.borhan.com' );

// If google anlytics should be enabled, set to the ua string
$wgBorhanGoogleAnalyticsUA = false;

// for additional script includes. 
$wgAdditionalDocsScriptInclude = false;

//Remote web inspector URL such as: weinre, fireBug
$wgRemoteWebInspector = false;

// Borhan Supported API Features
$wgBorhanApiFeatures = array();

/*********************************************************
 * Override Domain:
********************************************************/
$wgEnableBorhanOverrideDomain = true;

/*********************************************************
 * A comma-delimited string of allowed flashavrs to be passed to server on dynamic embed call:
********************************************************/
$wgAllowedVars = "inlineScript";
$wgAllowedVarsKeyPartials = "onPageJs,onPageCss,IframeCustomPluginJs,IframeCustomPluginCss";
$wgAllowedPluginVars = "plugin,templatePath,templates,iframeHTML5Js,iframeHTML5Css,loadInIframe";
$wgAllowedPluginVarsValPartials = "{html5ps}";
// Borhan cache TTL value in unix time for dynamic embed local storage caching of bWidget, default is 10 minutes
$wgCacheTTL = (10 * 60 * 1000);
// Borhan max cache entries, limit max available cached entries per domain to avoid over populating localStorage
$wgMaxCacheEntries = 1;

/*********************************************************
 * Include local settings override:
********************************************************/
$wgLocalSettingsFile = realpath( dirname( __FILE__ ) ) . '/../LocalSettings.php';

if( is_file( $wgLocalSettingsFile ) ){
	require_once( $wgLocalSettingsFile );
}

if( isset( $_GET['psbwidgetpath'] ) ){
	$psRelativePath = htmlspecialchars( $_GET['psbwidgetpath'] );
}
// The html5-ps settings file path
$wgBorhanPSHtml5SettingsPath =  realpath( dirname( __FILE__ ) ) . '/../' . $psRelativePath . '/includes/DefaultSettings.php';

// The html5-ps modules dir
$wgBorhanPSHtml5ModulesDir =  realpath(realpath( dirname( __FILE__ ) ) . '/../' . $psRelativePath . '/ps/modules');

// Enable every module in the "ps/modules" folder of bwidget-ps
$wgBwidgetPsEnabledModules = array();
if (!empty($wgBorhanPSHtml5ModulesDir)){
    $dPs = dir( $wgBorhanPSHtml5ModulesDir );
    while (false !== ($entryPs = $dPs->read())) {
        if( substr( $entryPs, 0, 1 ) != '.' && !in_array( $entryPs , $wgBwidgetPsEnabledModules ) ){
            $wgBwidgetPsEnabledModules[] = $entryPs;
        }
    }
}


//Set global configs into $wgMwEmbedModuleConfig in order to enable
//resource loader to output the config in the response
// if Manifest urls should be used:
$wgMwEmbedModuleConfig['Borhan.UseManifestUrls'] = $wgBorhanUseManifestUrls;
//Add license server config:
global $wgBorhanLicenseServerUrl, $wgBorhanUdrmLicenseServerUrl;
$wgMwEmbedModuleConfig['Borhan.LicenseServerURL'] = $wgBorhanLicenseServerUrl;
$wgMwEmbedModuleConfig['Borhan.UdrmServerURL'] = $wgBorhanUdrmLicenseServerUrl;

// Add Borhan api services: ( should be part of borhan module config)
include_once( realpath( dirname( __FILE__ ) )  . '/../modules/BorhanSupport/apiServices/mweApiKSTest.php' );
include_once( realpath( dirname( __FILE__ ) )  . '/../modules/BorhanSupport/apiServices/mweApiUiConfJs.php' );
include_once( realpath( dirname( __FILE__ ) )  . '/../modules/BorhanSupport/apiServices/mweApiSleepTest.php' );
include_once( realpath( dirname( __FILE__ ) )  . '/../modules/BorhanSupport/apiServices/mweFeaturesList.php' );
include_once( realpath( dirname( __FILE__ ) )  . '/../modules/BorhanSupport/apiServices/mweApiLanguageSupport.php' );
include_once( realpath( dirname( __FILE__ ) )  . '/../modules/BorhanSupport/apiServices/mweUpgradePlayer.php' );
include_once( realpath( dirname( __FILE__ ) )  . '/../modules/BorhanSupport/apiServices/mweApiGetLicenseData.php' );
include_once( realpath( dirname( __FILE__ ) )  . '/../studio/studioService.php');
/**
 * Extensions should register foreign module sources here. 'local' is a
 * built-in source that is not in this array, but defined by
 * ResourceLoader::__construct() so that it cannot be unset.
 *
 * Example:
 *   $wgResourceLoaderSources['foo'] = array(
 *       'loadScript' => 'http://example.org/w/load.php',
 *       'apiScript' => 'http://example.org/w/api.php'
 *   );
 */
$wgResourceLoaderSources = array();

