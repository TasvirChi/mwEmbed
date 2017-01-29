<?php 
	// Some includes for output of configuration options
	require_once( realpath( dirname( __FILE__ ) ) . '/doc-base.php' );
	require_once( realpath( dirname( __FILE__ ) ) . '/api_uivars.php' );
	require_once( realpath( dirname( __FILE__ ) ) . '/api_methods.php' );
	require_once( realpath( dirname( __FILE__ ) ) . '/api_listeners.php' );
	require_once( realpath( dirname( __FILE__ ) ) . '/api_evaluates.php' );

	/* should ideally auto generate or be in a separate file */
	$methodDocs = array(
		'bWidget.embed' => array(
			'desc'=>'Used to embed the Borhan player against an element target in the DOM',
			'params' => array(
				'targetId' => array(
					'type' => 'String', // assumed
					'optional' => true, 
					'desc' => 'The DOM player target id attribute string. ( if not included, you must include targetId in "settings" object )',
				),
				'settings'=> array(
					'type' => 'bWidget.settingsObject',
					'desc' => 'Object of settings to be used in embedding.'
				)
			),
			'returns' => array(
				'type' => 'boolean|null',
				'desc' => 'Returns boolean false if id not found'
			),
			'examples' => array(
				array(
					// either doc name or path can be defined ( for feature listed files vs non-feature listed )
					'type' => 'link',
					'name' => 'bWidget.embed',
					'docPath' => 'bwidget'
				),
				array(
					'type' => 'link',
					'name' => 'bWidget.embed playlist',
					'docFullPath' => 'modules/BorhanSupport/tests/bWidget.embed.playlist.qunit.html '
				)
			)
		),
		'bWidget.thumbEmbed' => array(
			'desc'=>'Used to embed a thumbnail player. When the user clicks on the thumbnail bWidget.embed will be called with the provided settings.',
			'params' => array(
				'targetId' => array(
					'type' => 'String', // assumed
					'optional' => true,
					'desc' => 'The DOM player target id attribute string. ( if not included, you must include targetId in "settings" object',
				),
				'settings'=> array(
					'type' => 'bWidget.settingsObject',
					'desc' => 'Object of settings to be used in embedding.'
				)
			),
			'examples' => array(
				array(
					// either doc name or path can be defined ( for feature listed files vs non-feature listed )
					'type' => 'link',
					'name' => 'bWidget.thumbEmbed',
					'docPath' => 'thumb'
				)
			)
		),
		'bWidget.getBorhanThumbUrl' => array(
			'desc'=>'Get video thumbnail URL.',
			'params' => array(
				'settings'=> array(
					'type' => 'bWidget.settingsObject',
					'desc' => 'Object of settings to be used in embedding.'
				)
			)
		),
		'bWidget.addReadyCallback' => array(
			'desc'=>'Adds a ready callback to be called after the BDP or HTML5 player is ready.',
			'params' => array(
				'readyCallback' => array(
					'type' => 'String',
					'desc' => 'Function to call after a player or widget is ready on the page.',
				)
			),
			'examples' => array(
				array(
					'type' => 'link',
					'name' => 'bWidget.addReadyCallback',
					'docFullPath' => 'modules/BorhanSupport/tests/ChangeMediaEntry.qunit.html '
				)
			)
		),
		 'bWidget.destroy' => array(
			 'desc'=>'Removes the player from the DOM.',
			 'params' => array(
				 'target' => array(
					 'type' => 'String',
					 'desc' => 'The target element or element ID to destroy.',
				 )
			 ),
			 'examples' => array(
				 array(
					'type' => 'link',
					'name' => 'bWidget.embed',
					'docPath' => 'bwidget'
				 )
			 )
		 ),
		'bWidget.api' => array(
			'desc' => 'The bWidget API object, used to create new instances of Borhan API request.',
			'params' => array(
				'apiObject'=> array(
					'type' => 'bWidget.apiOptions',
					'desc' => 'Object of API settings to be used in API requests.'
				)
			),
			'methods'=> array(
				'doRequest' => array(
					'type' => 'function',
					'desc' => "( RequestObject, callback ) Run the API request, issue callback with API response data."
				)
			),
			'returns' => array(
				'type' => 'bWidget.api',
				'desc' => 'Returns an instance of the bWidget API object.'
			),
			'examples' => array(
				array(
					'name' => 'bWidget.api',
					'docFullPath' => 'bWidget/tests/bWidget.api.html'
				),
				array(
						'name' => 'bWidget.getSources',
						'docFullPath' => 'modules/BorhanSupport/tests/bWidget.getSources.html'
				)
			)
		),
		'sendNotification' => array(
			'desc'=>'Call a BDP notification (perform actions using this API, for example: play, pause, changeMedia, etc.)',
			'params' => array(
				'notificationName' => array(
					'type' => 'String',
					'desc' => 'The name of notification to call.',
				),
				'notificationData'=> array(
					'type' => 'Object',
					'optional' => true,
					'desc' => 'The custom data to pass with the notification.'
				)
			)
		),
		'addJsListener' => array(
			'desc'=>'Register a javascript handler function for a BDP notification',
			'params' => array(
				'listenerString' => array(
					'type' => 'String',
					'desc' => 'The name of the notification to listen to.',
				),
				'jsFunctionName'=> array(
					'type' => 'String',
					'desc' => 'The name of the JavaScript handler function.'
				)
			)
		),
		'evaluate' => array(
			'desc'=>"Retrieves the value of a BDP model property or component's property, using the standard OOP dot notation inside curly braces",
			'params' => array(
				'object.property.properties' => array(
					'type' => 'String',
					'desc' => 'The reference to the component object with data that you want to extract. Enclose the reference in curly braces within single or double quotation marks.',
				)
			)
		),
		'setBDPAttribute' => array(
			'desc'=>"Change a value of a player configuration property or component's property using the standard OOP dot notation.",
			'params' => array(
				'object' => array(
					'type' => 'String',
					'desc' => 'A string that represents the object you want to modify. Use standard dot notation to specify sub-objects, for example, configProxy.flashvars'
				),'property' => array(
					'type' => 'String',
					'desc' => 'The player property that you want to modify.'
				),'value' => array(
					'type' => 'String',
					'desc' => 'The new value that you want to set for the player property.'
				)
			)
		),
		'jsCallbackReady' => array(
			'desc'=>"A JavaScript function on the hosting web page that is called by BDP when the setup of externalInterface APIs is completed.",
			'params' => array(
				'objectId' => array(
					'type' => 'String',
					'desc' => 'Represents the identifier of the player that is embedded.'
				)
			)
		)
	);
	$objectDefinitions = array(
		'bWidget.apiOptions' => array(
			'wid'=> array(
				'desc' => "The partner id to be used in the API request."
			),
			'ks' => array(
				'desc' => "The Borhan secret to be used in the request, if not supplied an anonymous KS will be generated and used."
			),
			'serviceUrl' => array(
				'desc' => 'Can be overwritten to target a different Borhan server.',
				'default' => 'http://cdnapi.borhan.com'
			),
			'serviceBase' => array(
				'desc' => "Can be overwritten to alternate Borhan service path.",
				'default' => '/api_v3/index.php?service='
			),
			'statsServiceUrl' => array(
				'desc' => "Default supplied via Borhan library include, can be overwritten to alternate URL for core analytics events.",
				'default' => 'http://stats.borhan.com'
			),
			'disableCache' => array(
				'desc' => "Sends no-cache param to API, for a fresh result. Can hurt performance and CDN cachability should be used sparingly.",
				'default' => 'false'
			)
		),
		'bWidget.settingsObject' => array(
			'targetId' => array(
				'desc' => 'The DOM player target id attribute string if not defined as top level param.'
			),
			'wid' => array(
				'desc' => 'Widget id, usually the partner id prefixed by underscore.'
			),
			'uiconf_id' => array(
				'type' => 'Number',
				'optional' => true,
				'desc' => 'The player uiconf_id'
			),
			'entry_id' => array(
				'desc' => 'The content entry id. Can be left empty for a JavaScript based entry id.'
			),
			'flashvars' => array(
				'type' => 'Object',
				'desc' => 'Runtime configuration object, can override arbitrary uiVars and plugin config.'
			),
			'params' => array(
				'type' => 'Object',
				'desc' => 'Runtime configuration object, can override arbitrary uiVars and plugin config.'
			),
			'cache_st' => array(
				'optional'=> true,
				'desc' => 'String to burst player cache'
			)
		)
	);



	function getDocTypeStr( $param ){
		global $objectDefinitions;
		$typeStr = ( isset( $param['type'] ) )?  $param['type'] : 'String';
		$optionalStr = ( isset( $param['optional'] ) )? ' <i>( Optional )</i> ': '';
		
		if( isset( $param['type'] ) &&  isset( $objectDefinitions[ $param['type'] ] )){
			$typeStr = '<a href="#'. $param['type'] . '">'.$param['type'] . '</a>';
		}
		return  '<span class="vartype">' . $typeStr . '</span> ' . $optionalStr;
	}
	function getObjectDocs( $objName ){
		$o='';
		// support recusive lookup for arrays: 
		if( is_array($objName) ){
			foreach( $objName as $name ){
				$o.= getObjectDocs( $name );
			}
			return $o;
		}
		global $objectDefinitions;
		$o= '<hr></hr>'.
			'<h4 class="linkable objectdoc" id="'. $objName . '">' . $objName . '</h4>' .
			'<div class="docblock">'.
			'<ul>';
		foreach( $objectDefinitions[$objName] as $attrName => $attrObj){
			$o.='<li><b>' . $attrName .'</b> ' . getDocTypeStr( $attrObj ) . ' ' . $attrObj['desc'] . '</li>';
		}
		$o.='<ul>';
		return $o;
	}
	function getDocs( $fnName){
		$o='';
		// support recursive lookup for arrays: 
		if( is_array($fnName) ){
			foreach( $fnName as $name ){
				$o.= getDocs( $name );
			}
			return $o;
		}
		global $methodDocs;
		$paramStr = '';
		$paramBlock = '';
		if( isset(  $methodDocs[$fnName]['params'] ) ){
			$paramBlock.='<h5 class="linkable" id="'. $fnName .'-parameters">PARAMETERS:</h5>'.
					'<ul>';
			$coma = '';
			foreach( $methodDocs[$fnName]['params'] as $paramName => $param ){
				if( isset( $param['optional'] ) && $param['optional'] == true ){
					$paramStr.=$coma . ' [' . $paramName . ']';
				} else{
					$paramStr.=$coma. $paramName;
				}
				
				$paramBlock.= '<li><b>' . $paramName . '</b> '.
						getDocTypeStr( $param ) .
						$param['desc'] .
						"</li>";
				$coma = ', ';
			}
			$paramBlock.='</ul>';
		}
		
		$o= '<hr></hr>'.
			'<h4 class="linkable" id="'. $fnName . '">' . $fnName . ' ('. $paramStr . ')</h4>' . 
			'<span class="description">'. $methodDocs[$fnName]['desc'] . '</span>'. 
			'<div class="docblock">';
		// output parameters if set: 
		$o.= $paramBlock;
		// output returns if set:
		if( isset(  $methodDocs[$fnName]['returns'] ) ){
			$o.='<h5 id="'. $fnName .'-returns">RETURNS:</h5>';
			$o.= '<ul><li>' . getDocTypeStr( $methodDocs[$fnName]['returns']  ) .
			 ' ' . $methodDocs[$fnName]['returns']['desc'] . '</li></ul>';
		}
		// output examples if set:
		if( isset( $methodDocs[$fnName]['examples'] ) ){
			$o.='<h5 class="linkable" id="'. $fnName .'-examples">EXAMPLES:</h5><ul>';
			foreach( $methodDocs[$fnName]['examples'] as $example ){
				$text = '';
				if( !isset( $example['type'] ) ){
					$example['type'] = 'link';
				}
				switch ($example['type']) {
					case 'link':
						$link = ( isset( $example['docPath'] ) ) ?
							'index.php?path=' . $example['docPath']: '';
						if( $link == '' && isset( $example['docFullPath'] ) ){
							$link = '../' . $example['docFullPath'];
						}
						$text = '<a href="'. $link . '">' . $example['name'] . '</a>';
						break;
					case 'code':
						$text = $example['name'] . '<br><pre class="prettyprint linenums">'.htmlspecialchars($example['code']).'</pre>';
						break;
				}
				$o.= '<li>'. $text .'</li>';
			}
			$o.='</ul>';
		}
		// close <div class="docblock">
		$o.='</div>';
		return $o;
	}

	function getTableContent($headers, $param){
		$paramArrayObject = new ArrayObject($param);
		$paramArrayObject->ksort();
		$o = "<table>";
		$o.= "<tr>";
		foreach( $headers as $header ){
			$o.= "<th>".$header."</th>";
		}
		$o.= "</tr>";
		if( is_array($param) ){
			foreach( $paramArrayObject as $key => $value ){
				$restrictedAvailability = false;
				$o.= "<tr>";
				$o.= "<td>".$key;
				foreach( $value as $val => $value1){
					if ($val == 'availability' && $value1 == 'bdp'){
						$o.= '<br><span class="label label-warning">Legacy Only</span>';
						$restrictedAvailability = true;
					}
				}
				//if (!$restrictedAvailability)
				//	$o.= '<br><span class="label label-success">Legacy / Universal</span>';
				$o.= "</td>";

				foreach( $value as $val => $value){
					if ($val != 'availability' && $val != 'example')
						$o.= "<td>".$value."</td>";
					if ($val == 'example'){
						if ($value != ''){
								$o.= '<td><a href="'.$value.'" target="_blank">Example</a></td>';
							}else{
								$o.= '<td>n/a</td>';
							}

						}
				}
/*
				foreach( $value as $val){
						$o.= "<td>".$val."</td>";
				}
				$o.= "</tr>";*/
			}

		}
		$o.= "</table>";
		return $o;
	}

?>
<style>
	.vartype{
		margin: 0px;
		border: 1px solid #DDD;
		background-color: #F8F8F8;
		border-radius: 3px;
		padding: 2px;
	}
	.docblock{
		padding-left:20px;
	}
	.linkable{
		cursor: pointer;
	}
	.objectdoc{
		color:#777;
	}
	table,th,td{
		border:1px solid black;
		border-collapse:collapse;
	}
	th,td{
		padding:5px;
	}
	th{
		text-align:left;
	}
</style>


<script>
//document ready events:
$(function(){
	// make code pretty
	window.prettyPrint && prettyPrint();
	// add linkable actions: 
	$('.linkable').on('click', function(){
		window.location.hash = '#' + $(this).attr('id');
	});
});</script>
<div id="hps-resources"></div>
<h2>Borhan Player API</h2>
<p>This documentation covers version <strong><i><?php global $wgMwEmbedVersion; echo $wgMwEmbedVersion ?></i></strong> of the html5 library. </p>
<p>
<a href="#bWidget" class="btn btn btn-info btn-large">bWidget API &raquo;</a>
<a href="#uiVars" class="btn btn btn-info btn-large">Using UIVars &raquo;</a>
<a href="#bdpAPI" class="btn btn btn-info btn-large">Player API &raquo;</a>
<a href="#bWidgetApi" class="btn btn btn-info btn-large">BWidget Server API &raquo;</a>
</p>

<a name="bWidget"></a>
<h2>bWidget Embedding API</h2>
The bWidget API is available after you include the Borhan player library. bWidget provides embedding and basic utility functions.
<br>Sample Borhan player library include :
<pre class="prettyprint linenums">
&lt!-- Substitute {partner_id} for your Borhan partner id, {uiconf_id} for uiconf player id --&gt;
&lt;script src=&quot;http://cdnapi.borhan.com/p/{partner_id}/sp/{partnerId}00/embedIframeJs/uiconf_id/{uiconf_id}/partner_id/{partnerId}&quot;&gt;&lt;/script&gt;
</pre>
After you embed the Borhan player library, the following bWidget API is available:
<div class="docblock">
	<?php echo getDocs( array( 'bWidget.embed', 'bWidget.thumbEmbed', 'bWidget.getBorhanThumbUrl','bWidget.addReadyCallback','bWidget.destroy' ) ) ?>
	<?php echo getObjectDocs( array( 'bWidget.settingsObject' ) ) ?>
</div><br><br>
<a name="bWidgetApi"></a>
<h3>Server API requests ( bWidget.api )</h3>
bWidget Server API enables direct <a href="http://www.borhan.com/api_v3/testmeDoc/index.php">Borhan Server API</a> calls from JavaScript. 
This should not be confused with the <a href="http://www.borhan.com/api_v3/testme/client-libs.php">JavaScript client library</a>, 
which offers object mappings and works with the code generated in the 
<a href="http://www.borhan.com/api_v3/testme/index.php">test me console</a>. <br>
The Borhan Server API offers minimal object validation, in exchange for being much smaller.<br><br>
Creating a bWidget API object, issue a playlist request, log the result:
<pre class="prettyprint linenums">
new bWidget.api( { 'wid' : '_243342', })
	.doRequest({'service':'playlist', 'action': 'execute', 'id': '1_e387kavu'}, 
		function( data ){
			console.log( data );
		}
	);
</pre>
<div class="docblock">
	<?php echo getDocs('bWidget.api' ) ?>
	<?php echo getObjectDocs( array( 'bWidget.apiOptions' ) ) ?>
</div>

<a name="uiVars"></a>
<h2>Using UIVars</h2>
<p>To simplify the management of many of the player features, Borhan has implemented “UIVars” to override and configure the player features.</p>
<p>Borhan UIVars are an incredibly powerful feature of the Borhan Players that allow publishers to pre-set or override the value of any FlashVar (object level parameters), show, hide and disable existing UI elements, add new plugins and UI elements to an existing player, and modify attributes of all the player's elements.</p>
<p>FlashVars are configuration variables that are used in the Borhan Player in the HTML embed code and work for “regular” static embed, server-generated embed or JavaScript-generated embed code.</p>
<p>The following table lists the Borhan Player FlashVars:</p>
<br>
<h5>Connecting to the Borhan Services:</h5>
<div class="docblock">
	<?php echo getTableContent( array( 'Ui Var', 'Type', 'Description', 'Default', 'Example' ), $uiVars1 ) ?>
</div><br><br>
<h5>Borhan MediaEntry:</h5>
<div class="docblock">
	<?php echo getTableContent( array( 'Ui Var', 'Type', 'Description', 'Default', 'Example' ), $uiVars2 ) ?>
</div><br><br>
<h5>Player Layout and Functionality:</h5>
<div class="docblock">
	<?php echo getTableContent( array( 'Ui Var', 'Type', 'Description', 'Default', 'Example' ), $uiVars3 ) ?>
</div><br><br>
<h5>Playback Control:</h5>
<div class="docblock">
	<?php echo getTableContent( array( 'Ui Var', 'Type', 'Description', 'Default', 'Example' ), $uiVars4 ) ?>
</div><br><br>
<h5>Player Properties:</h5>
<div class="docblock">
	<?php echo getTableContent( array( 'Ui Var', 'Type', 'Description', 'Default', 'Example' ), $uiVars5 ) ?>
</div><br><br>
<h5>MediaProxy:</h5>
<p>The MediaProxy object is responsible for referencing and loading of the current playing media.</p>
<div class="docblock">
	<?php echo getTableContent( array( 'Ui Var', 'Type', 'Description', 'Default', 'Example' ), $uiVars6 ) ?>
</div><br><br>
<h5>BDP Components & Plugins:</h5>
<p>Using a standard OOP dot notation, each BDP component and plugin attribute can be overridden via Flashvars: objectId.parameter=value.<br>For example, to set the playlist to load automatically, pass the following Flashvar: playlistAPI.autoPlay=true</p><br><br>

Code sample:<br>
<pre class="prettyprint linenums">
bWidget.embed({
  "targetId": "borhan_player_1402219661",
  "wid": "_1645161",
  "uiconf_id": 24231962,
  "flashvars": {
		'autoMute': true,
		'autoPlay': false,
		'adsOnReplay': true,
		'imageDefaultDuration': 5,
		'mediaProxy.preferedFlavorBR': 1400,
		'closedCaptions': {
				'layout': 'ontop',
				'useCookie': true,
				'defaultLanguageKey': 'en',
				'fontsize': 12,
				'bg' : '0x335544',
				'fontFamily' : 'Arial',
				'fontColor' : '0xFFFFFF',
				'useGlow' : 'false',
				'glowBlur': 4,
				'glowColor': '0x133693'
				}
  },
  "cache_st": 1402219661,
  "entry_id": "1_a3njcsia"
});
</pre>

<br><br>
<a name="bdpAPI"></a>

 <h2>Player API</h2>
<p>The JavaScript API is a two-way communication channel that lets the player communicate what it is doing and lets you instruct the player to perform operations.
<br>For more information: <a href="http://knowledge.borhan.com/javascript-api-borhan-media-players#UnderstandingtheJavaScriptAPIWorkflow" target="_blank">JavaScript API for Borhan Media Players</a></p>
<p>Available JavaScript API:</p>
<a href="#api1">1. Receiving notification that the player API is ready</a><br>
<a href="#api2">2. Calling a player method from JavaScript</a><br>
<a href="#api3">3. Registering to a player event</a><br>
<a href="#api4">4. Un-registering a player event</a><br>
<a href="#api5">5. Retrieving a player property</a><br>
<a href="#api6">6. Setting a player attribute</a><br>


<a name="api1"></a>
<h3>1. Receiving notification that the player API is ready</h3>
<p>Before you can use the JavaScript API's base methods, the player has to reach the point in its internal loading sequence when it is ready to interact with your code. The player lets you know that it is ready by calling the <b>jsCallbackReady</b> JavaScript function on the page.</p>
<p>jsCallbackReady is the player's first callback. The player passes to the jsCallbackReady function an objectId parameter that represents the identifier of the player that is embedded on the page.</p>
<?php echo getDocs( array( 'jsCallbackReady' ) ) ?>
<br><br>Code sample:<br>
<pre class="prettyprint linenums">
function jsCallbackReady(objectId) {
	window.bdp = document.getElementById(objectId);
}
</pre>
<p>Borhan recommends that you place jsCallbackReady in the global scope. This allows easily finding this critical function in the JavaScript code.</p><br><br>


<a name="api2"></a>
<h3>2. Calling a player method from JavaScript</h3>
<p>Use the <b>sendNotification</b> method to create custom notifications that instruct the player to perform an action, such as play, seek, or pause.</p>
<?php echo getDocs( array( 'sendNotification' ) ) ?>
<br><br><p>Available Notifications:</p>
<?php echo getTableContent( array( 'Notification', 'Params', 'Description' ), $methods ) ?>
<br><br>Code sample:<br>
<pre class="prettyprint linenums">
&lt;script language="JavaScript"&gt;
	var bdp;
	function jumpToTime(timesec)
	{
		bdp.sendNotification("doPlay");

		// Moves to a specific point, defined in seconds from the start of the video
		bdp.sendNotification("doSeek", timesec);
	}
&lt;/script&gt;
</pre>


<a name="api3"></a>
<h3>3. Registering to a player event</h3>
<p>Use the <b>addJsListener</b> method to listen for a specific notification that something happened in the player, such as the video is playing or is paused.</p>
<?php echo getDocs( array( 'addJsListener' ) ) ?>
<br><h5>Player Life Cycle:</h5>
<?php echo getTableContent( array( 'Event', 'Parameters', 'Description' ), $listeners1 ) ?>
<br><br><h5>Player Information:</h5>
<?php echo getTableContent( array( 'Event', 'Parameters', 'Description' ), $listeners2 ) ?>
<br><br><h5>Player Advertisement Related Notifications:</h5>
<?php echo getTableContent( array( 'Event', 'Parameters', 'Description' ), $listeners3 ) ?>
<br><br>Code sample:<br>
<pre class="prettyprint linenums">
bdp.addJsListener(“playerUpdatePlayhead”, “playerUpdatePlayheadHandler”)
function playerUpdatePlayheadHandler(data, id) {
	// data = the player's progress time in seconds
	// id = the ID of the player that fired the notification
}
</pre>


<a name="api4"></a>
<h3>4. Un-registering a player event</h3>
<p>Use the <b>removeJsListener</b> method to remove a listener that is no longer needed.</p>
<h5>Why Remove a JsListener?</h5>
BDP3 accumulates JsListeners. If you add a JsListener for a notification and then add another JsListener for the same notification, the new JsListener does not override the previous one. Both JsListeners are executed in the order in which they are added. To prevent unexpected behavior in your application, Borhan recommends that you remove unnecessary JsListeners.
When you remove a listener, you must specify the associated function name.
<br><br>Code sample:<br>
<pre class="prettyprint linenums">
removeJsListener("event", "functionName")
</pre>


<a name="api5"></a>
<h3>5. Retrieving a player property</h3>
<p>Use the <b>evaluate</b> method to find out something about a player by extracting data from player components.</p>
<?php echo getDocs( array( 'evaluate' ) ) ?>
<br><br><p>Available Properties:</p>
<?php echo getTableContent( array( 'Property', 'Description' ), $evaluates ) ?>
<br><br>Code sample:<br>
<pre class="prettyprint linenums">
function getName() {
var entry_name = bdp.evaluate('{mediaProxy.entry.name}');
	alert('Entry name: '+entry_name);
}
</pre>


<a name="api6"></a>
<h3>6. Setting a player attribute</h3>
<p>Use the <b>setBDPAttribute</b> method to change a player attribute by setting its value.</p>
<br>Code sample:<br>
<pre class="prettyprint linenums">
bdp.setBDPAttribute("configProxy.flashvars","autoPlay","true")
</pre>
<br><p>Some plugins support runtime updates using <b>setBDPAttribute</b>.
<br>For example, the "theme" plugin supports such updates:</p>
<pre class="prettyprint linenums">
var bdp = document.getElementById('kVideoTarget');
bdp.setBDPAttribute("theme", "buttonsSize", "14");
</pre>
<?php echo getDocs( array( 'setBDPAttribute' ) ) ?>
