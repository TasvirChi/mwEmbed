<?php
// Include configuration 
require_once( realpath( dirname( __FILE__ ) ) . '/../includes/DefaultSettings.php' );

// start gzip compression if avaliable: 
if(!ob_start("ob_gzhandler")) ob_start();

$authPage = new borhanAuthPage();
$authPage->run();

class borhanAuthPage {
	/**
	 * Main output page method
	 */
	function run(){
		global $wgBorhanAuthHTTPS, $wgBorhanAuthDomains, $wgHTTPProtocol;
		// Check for must run over https
		if( $wgBorhanAuthHTTPS && $wgHTTPProtocol != 'https' ){
			return $this->outputError( "Error, Borhan Authentication page must run over <b>https</b>" );
		} 
		// Check Domain restrictions
		if( ! in_array($_SERVER['HTTP_HOST'], $wgBorhanAuthDomains ) ){
			return $this->outputError( "Error, Borhan page can't run on this domain, " .$_SERVER['HTTP_HOST'] );
		}
		// output the javascript driven frame:
		$this->outputAuthPage();
	}
	function outputAuthPage(){
		$this->outputPageTop();
		?>
		<script src="authPage.js"></script>
		<?php
		$this->closePage();
	}
	function outputError( $msg ){
		$this->outputPageTop();
		echo $msg;
		$this->closePage();
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
	function outputPageTop(){
		// Output a full auth page
		?>
<!DOCTYPE HTML>
<html>
	<head>
	<style>
		body {
			padding: 15px;
		}
		body {
			top:0px;
			left:0px;
			margin: 0;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			line-height: 18px;
			color: #333;
			background-color: white;
		}
	</style>
		<script src="../resources/jquery/jquery.min.js"></script>
		<link rel="stylesheet" href="authPage.css"></link>
	</head>
	<body>
<?php 
	}
	function closePage(){
	?></body>
</html><?php 
	}
}
	