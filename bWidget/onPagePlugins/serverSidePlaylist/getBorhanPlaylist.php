<?php 
// Include the borhan php api, you can get your copy here:
// http://www.borhan.com/api_v3/testme/client-libs.php
require_once( dirname( __FILE__ ) . '/../../../modules/BorhanSupport/Client/borhan_client_v3/BorhanClient.php');
/**
 * Takes in a : 
 * $wid, string, The widget id 
 * $playlistId, string, The playlist_id
 */
function getBorhanPlaylist( $partnerId, $playlistId ){
	$config = new BorhanConfiguration($partnerId);
	$config->serviceUrl = 'http://www.borhan.com/';
	$client = new BorhanClient($config);
	$client->startMultiRequest();
	// the session: 
	$kparams = array();
	$client->addParam( $kparams, 'widgetId', '_' . $partnerId );
	$client->queueServiceActionCall( 'session', 'startWidgetSession', $kparams );
	// The playlist meta:
	$kparams = array();
	$client->addParam( $kparams, 'ks', '{1:result:ks}' );
	$client->addParam( $kparams, 'id', $playlistId );
	$client->queueServiceActionCall( 'playlist', 'get', $kparams );
	// The playlist entries: 
	$client->queueServiceActionCall( 'playlist', 'execute', $kparams );
	
	$rawResultObject = $client->doQueue();
	return array(
		'meta' => (array)$rawResultObject[1],
		'playlist' => (array)$rawResultObject[2] 
	);
}