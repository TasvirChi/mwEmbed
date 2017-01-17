<?php
/**
* This demonstrates grabbing a admin KS for a particular action ( sview ) being granted to the current user / session.
*/
$wgMwEmbedApiServices['KSTest'] = 'mweApiKSTest';

// Include the borhan client
require_once( dirname( __FILE__ ) . '../../Client/BorhanClientHelper.php' );

class mweApiKSTest {
	function run(){
		global $wgBorhanUserSecret;
		// validate params ( hard coded to test a particular test file / account )
		if( !isset( $_REQUEST['wid'] ) ||  $_REQUEST['wid'] != '_243342' ){
			$this->outputError( 'bad widget param');
		}
		$this->partnerId = '243342';

		if( !isset( $_REQUEST['entry_id'] ) ){
			$this->outputError( 'bad entry_id param');
		}
		$this->entryId = $_REQUEST['entry_id'];

		// load library and get ks for given entry:
		if( !isset( $wgBorhanUserSecret ) || ( $wgBorhanUserSecret == null ) ) {
			$this->outputError( 'no user ks configured');
		}
	
		$client = $this->getClient();
		$ks = $client->session->start ( $wgBorhanUserSecret, 
				$_SERVER['REMOTE_ADDR'], 
				BorhanSessionType::USER, 
				$this->partnerId, 
				3600, // expire in one hour
				"sview:{$this->entryId}" // give permision to "view" the entry
			);
		
		header( 'Content-type: text/javascript');
		echo json_encode(array('ks' => $ks ) );
	}
	function getClient(){
		$conf = new BorhanConfiguration( $this->partnerId );
		$conf->serviceUrl = $this->getServiceConfig( 'ServiceUrl' );
		$conf->serviceBase = $this->getServiceConfig( 'ServiceBase' );
		return new BorhanClient( $conf );
	}
	function getServiceConfig( $name ){
		switch( $name ){
			case 'ServiceUrl' : 
				global $wgBorhanServiceUrl;
				return $wgBorhanServiceUrl;
				break;
			case 'ServiceBase':
				global $wgBorhanServiceBase;
				return $wgBorhanServiceBase;
				break;
		}
	}
	function outputError( $msg ){
		header( 'Content-type: text/javascript');
		echo json_encode(array( 'error' => $msg  ) );
		exit(1);
	}
};