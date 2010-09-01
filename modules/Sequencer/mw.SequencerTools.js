/**
 * Handles the "tools" window top level component driver 
 */

//Wrap in mw closure to avoid global leakage
( function( mw ) {
	
mw.SequencerTools = function( sequencer ) {
	return this.init( sequencer );
};

// Set up the mvSequencer object
mw.SequencerTools.prototype = {
	init: function(	sequencer ){
		this.sequencer = sequencer;
	},
	
	// The current smil clip ( lazy init )
	currentSmilClip: null,
	
	// The current selected tool ( lazy init )
	currentToolId: null,
	
	// JSON tools config
	tools:{
		'trim':{
			'editWidgets' : [ 'trimTimeline' ], 
			'editableAttributes' : ['clipBegin','dur' ],			
			'contentTypes': ['video', 'audio']
		},
		'duration':{			 
			'editableAttributes' : [ 'dur' ],
			'contentTypes': ['img']
		},
		'panzoom' : {
			'editWidgets' : ['panzoom'],
			'editableAttributes' : [ 'panZoom' ],
			'contentTypes': [ 'img'], // xxx todo add video support
			'animate' : 'true'
		},
		'transitions' : {
			'editableAttributes' : [ 'transIn', 'transOut' ],
			'contentTypes': ['video', 'img' ]
		}
	},
	editableAttributes:{		
		'clipBegin':{
			'type': 'time',
			'title' : gM('mwe-sequencer-start-time' )		
		},
		'dur' :{
			'type': 'time',
			'title' : gM('mwe-sequencer-clip-duration' )
		},
		'panZoom' :{
			'type' : 'display',
			'inputSize' : 15,
			'title' : gM('mwe-sequencer-clip-panzoom' ),
			'defaultValue' : '0, 0, 100%, 100%'
		},
		'transIn' : {
			'type' : 'select',
			'selectValues' : [ 'fadeFromColor' ]
		}, 
		'transOut' : {
			'type' : 'select',
			'selectValues' : [ 'fadeFromColor', 'crossfade' ]
		}
	},
	editableTypes: {
		'display': {
			update: function( _this, smilClip, attributeName, value){
				$j( smilClip ).attr( attributeName, value);
				// update the display
			},
			getSmilVal : function( _this, smilClip, attributeName ){
				if( $j( smilClip ).attr( attributeName ) ){
					return $j( smilClip ).attr( attributeName ) 
				}
				// Check for a default value
				if( _this.editableAttributes[ attributeName ].defaultValue  ){
					return _this.editableAttributes[ attributeName ].defaultValue;
				}
				return '';
			}
		},
		'time' : {
			update : function( _this, smilClip, attributeName, value){
				// Validate time
				var seconds = _this.sequencer.getSmil().parseTime( value );
				$j( smilClip ).attr( attributeName, mw.seconds2npt( seconds ) );
				// Update the clip duration :
				_this.sequencer.getEmbedPlayer().getDuration( true );
				
				// Seek to "this clip" 
				_this.sequencer.getEmbedPlayer().setCurrentTime( 
					$j( smilClip ).data('startOffset')
				);								
			},			
			getSmilVal : function( _this, smilClip, attributeName ){
				var smil = _this.sequencer.getSmil();	
				return mw.seconds2npt( 
						smil.parseTime( 
							$j( smilClip ).attr( attributeName ) 
						)
					);
			}
		}
	},
	editActions: {
		'preview' : {
			'icon' : 'play',
			'title' : gM('mwe-sequencer-preview'),
			'action': function( _this, smilClip ){				
				_this.sequencer.getPlayer().previewClip( smilClip );
				// xxx todo  update preview button to "pause" / "play" 
			}
		},
		'cancel' : {
			'icon': 'close',
			'title' : gM('mwe-cancel'),
			'action' : function( _this, smilClip ){
				$j.each( 
					_this.getToolSet( 
						_this.sequencer.getSmil().getRefType( smilClip ) 
					), 
					function( inx, toolId ){
						var tool = _this.tools[toolId];
						for( var i=0; i < tool.editableAttributes.length ; i++ ){
							var attributeName = tool.editableAttributes[i]; 
							var $editToolInput = $j('#' + _this.getEditToolInputId( toolId, attributeName ) );  					
							// Restore all original attribute values
							smilClip.attr( attributeName, $editToolInput.data('initialValue') );
						}				
					}
				);
								
				// Update the clip duration :
				_this.sequencer.getEmbedPlayer().getDuration( true );
				
				// Update the embed player
				_this.sequencer.getEmbedPlayer().setCurrentTime( 
					$j( smilClip ).data('startOffset')
				);

				// Close / empty the toolWindow
				_this.setDefaultText();
			}
		}
	},
	editWidgets: {
		'panzoom' : {
			'onChange': function( _this, target, smilClip ){
				var panZoomVal = $j('#' +_this.getEditToolInputId( 'panzoom', 'panZoom')).val();
				mw.log("panzoom change:" + panZoomVal );
				// Update on the current smil clip display:
				_this.sequencer.getSmil()
				.getLayout()
				.panZoomLayout(
					smilClip
				);
			},
			'draw': function( _this, target, smilClip ){				
				var orginalHelperCss = {
					'position' : 'absolute',
					'width' : 100,
					'height' : 75,
					'top' : 50,
					'left' : 70,
					'font-size' : 'x-small'
				};				
				// Add a input box binding: 				
				$j('#' +_this.getEditToolInputId( 'panzoom', 'panZoom'))
				.change(function(){
					_this.editWidgets.panzoom.onChange( _this, target, smilClip);
				})
				
				$j( target ).append( 
					$j('<h3 />').html( 
						gM('mwe-sequencer-tools-panzoomhelper-desc')
					)
					,
					/*xxx Keep aspect button ?*/
					// Rest layout button ( restores default position )
					$j.button({						
						'icon' : 'arrow-4',
						'text' : gM( 'mwe-sequencer-tools-panzoomhelper-resetlayout' )
					})
					.attr('id', 'panzoomResetLayout')
					.css('float', 'left')
					.hide()
					.click(function(){
						// Restore default SMIL setting
						_this.editableTypes['display'].update(
							_this, 
							smilClip, 
							'panzoom',
							_this.editableAttributes['panzoom'].defaultValue
						)
					})
					,
					$j('<div />')				
					.css({
						'border' : '1px solid #DDDDDD',
						'float' : 'left',
						'position' : 'relative',
						'width': '240px',
						'height' : '180px',
						'overflow' : 'hidden'
					})
					.append( 
						$j('<div />')
						.css( orginalHelperCss )					
						.attr({
							'id': "panzoomHelper" 
						})					
						.addClass("ui-widget-content")
						.text( gM('mwe-sequencer-tools-panzoomhelper') )
					)					
				);
				var startPanZoomVal = '';
				var setStartPanZoomVal = function(){
					 startPanZoomVal = $j( smilClip ).attr( 'panZoom');
					if(! startPanZoomVal ){
						startPanZoomVal = _this.editableAttributes['panZoom'].defaultValue;
					}	
				}
				
				var updatePanZoomFromUiValue = function( layout ){							
					var pz = startPanZoomVal.split(',');
					// Set the new percent offset to x/2 
					if( layout.left ){
						pz[0] = ( parseInt( pz[0] ) - ( layout.left ) ) + '%';
					}
					
					if( layout.top ){
						pz[1] = ( parseInt( pz[1] ) - ( layout.top ) )+ '%';
					}
					
					if( layout.width ) {						
						pz[2] = ( parseInt( pz[2] ) - ( layout.width / 2) ) + '%' 
					
						// right now only keep aspect is supported do size hack::
						pz[3] = parseInt( pz[2] )  * _this.sequencer.getSmil().getLayout().getTargetAspectRatio();
						// only have 2 significant digits
						pz[3] = ( Math.round( pz[3]* 100 ) / 100 ) + '%';						
					}
					// Trim all the values
					for(var i=0; i < pz.length; i++){
						pz[i] = $j.trim( pz[i] );
					}
					var smilPanZoomValue = pz.join(', ');					
					
					// Update the smil DOM: 
					$j( smilClip ).attr( 'panZoom', smilPanZoomValue );
					
					// Update the user input tool input value:
					$j('#' +_this.getEditToolInputId( 'panzoom', 'panZoom')).val( smilPanZoomValue );
					
					// Animate the update on the current smil clip display:
					_this.sequencer.getSmil()
					.getLayout()
					.panZoomLayout(
						smilClip
					);
				}
				// Add bindings
				$j('#panzoomHelper')
				.draggable({ 
					containment: 'parent',
					start: function( event, ui){
						setStartPanZoomVal();
					},
					drag: function( event, ui){
						updatePanZoomFromUiValue({
							'top' : ( orginalHelperCss.top - ui.position.top ), 
							'left' : ( orginalHelperCss.left -  ui.position.left )
						});							
					},
					stop: function( event, ui){
						// run the onChange ?
						// Restore original css for the layout helper 
						$j(this).css( orginalHelperCss )
					}
				})
				.css('cursor', 'move')
				.resizable({
					handles : 'all',
					maxWidth : 170,
					maxHeight: 130,					
					aspectRatio: 4/3,
					start: function( event, ui){
						setStartPanZoomVal();
					},
					resize : function(event, ui){				
						updatePanZoomFromUiValue({
							'width' : ( orginalHelperCss.width - ui.size.width ), 
							'height' : ( orginalHelperCss.top - ui.size.height )
						});									
					},
					stop: function( event, ui){						
						// Restore original css
						$j(this).css( orginalHelperCss )
					}
				})
				
			}
		},
		'trimTimeline' : {
			'onChange': function( _this, target, smilClip ){				
				var smil = _this.sequencer.getSmil();
				// Update the preview thumbs
				
				// (local function so it can be updated after the start time is done with its draw ) 
				var updateDurationThumb = function(){
					// Check the duration:
					var clipDur = $j('#editTool_trim_dur').val();
					if( clipDur ){
						// Render a thumbnail for the updated duration  
						smil.getLayout().drawElementThumb( 
							$j( target ).find('.trimEndThumb'),
							smilClip,
							clipDur
						);
					}
				}
				
				var clipBeginTime = $j('#editTool_trim_clipBegin').val();
				if( !clipBeginTime ){
					$j(target).find('.trimStartThumb').hide();
				} else {
					mw.log("Should update trimStartThumb::" +  $j(smilClip).attr('clipBegin') );
					// Render a thumbnail for relative start time = 0  
					smil.getLayout().drawElementThumb( 
						$j( target ).find('.trimStartThumb'), 
						smilClip, 
						0,
						updateDurationThumb()
					)
				}
			},
			// Return the trimTimeline edit widget
			'draw': function( _this, target, smilClip ){
				var smil = _this.sequencer.getSmil();
				// check if thumbs are supported 
				if( _this.sequencer.getSmil().getRefType( smilClip ) == 'video' ){ 
					$j(target).append(
						$j('<div />')					
						.addClass( 'trimStartThumb ui-corner-all' ),					
						$j('<div />')					
						.addClass( 'trimEndThumb ui-corner-all' ),
						$j('<div />').addClass('ui-helper-clearfix') 
					)			
				}
				
				// Add a trim binding: 				 
				$j('#' + _this.getEditToolInputId( 'trim', 'clipBegin') +
				   ',#' + _this.getEditToolInputId( 'trim', 'dur') )
				.change( function(){
					_this.editWidgets.trimTimeline.onChange( _this, target, smilClip);
				})
				
				// Update the thumbnails:
				_this.editWidgets.trimTimeline.onChange( _this, target, smilClip);
				
				// Get the clip full duration to build out the timeline selector
				smil.getBody().getClipAssetDuration( smilClip, function( fullClipDuration ) {
					
					var sliderToTime = function( sliderval ){
						return parseInt( fullClipDuration * ( sliderval / 1000 ) );
					}
					var timeToSlider = function( time ){
						return parseInt( ( time / fullClipDuration ) * 1000 );
					}
					var startSlider = timeToSlider( smil.parseTime( $j('#editTool_trim_clipBegin').val() ) );
					var sliderValues = [
					    startSlider,
					    startSlider + timeToSlider( smil.parseTime( $j('#editTool_trim_dur').val() ) )
					];								
					// Return a trim tool binded to smilClip id update value events. 
					$j(target).append(
						$j('<div />')
						.attr( 'id', _this.sequencer.id + '_trimTimeline' )
						.css({
							'position': 'absolute',
							'left' : '15px',
							'right' : '15px',
							'margin': '5px'
						})
						.slider({
							range: true,
							min: 0,
							max: 1000,
							values: sliderValues,
							slide: function(event, ui) {	
							
								$j('#' + _this.getEditToolInputId( 'trim', 'clipBegin') ).val( 
									mw.seconds2npt( sliderToTime( ui.values[0] ), true ) 
								);
								$j('#' + _this.getEditToolInputId( 'trim', 'dur') ).val(  
									mw.seconds2npt( sliderToTime( ui.values[1] - ui.values[0] ), true )
								);
							},
							change: function( event, ui ) {
								var attributeValue = 0, sliderIndex  = 0;
								
								// Update clipBegin 
								_this.editableTypes['time'].update( _this, smilClip, 'clipBegin',  sliderToTime( ui.values[ 0 ] ) );
								
								// Update dur
								_this.editableTypes['time'].update( _this, smilClip, 'dur',   sliderToTime( ui.values[ 1 ]- ui.values[0] ) );
																				
								// update the widget display
								_this.editWidgets.trimTimeline.onChange( _this, target, smilClip);
								
								// Register the edit state for undo / redo 
								_this.sequencer.getActionsEdit().registerEdit();
								
							}
						})
					);
				});
				// On resize event
				
				// Fill in timeline images
				
			}
		}
	},
	getDefaultText: function(){
		return  gM('mwe-sequencer-no_selected_resource');
	},
	setDefaultText: function(){
		this.sequencer.getEditToolTarget().html(
			this.getDefaultText() 
		)
	},
	getEditToolInputId: function( toolId, attributeName){
		return 'editTool_' + toolId + '_' + attributeName;
	},
	/**
	 * update the current displayed tool ( when an undo, redo or history jump changes smil state ) 
	 */
	updateToolDisplay: function(){
		var _this = this;
	
		// If tools are displayed update them 
		if( this.sequencer.getEditToolTarget().find('.editToolsContainer').lenght ){			
			this.drawClipEditTools()
		}
		
	},
	getToolSet: function( refType ){
		var toolSet = [];		
		for( var toolId in this.tools){		
			if( this.tools[ toolId ].contentTypes){
				if( $j.inArray( refType, this.tools[ toolId ].contentTypes) != -1 ){
					toolSet.push( toolId );
				}
			}
		}
		return toolSet;
	},
	drawClipEditTools: function( smilClip, selectedToolId ){
		var _this = this;
		
		// Update the current clip and tool :
		if( smilClip ){
			this.setCurrentSmilClip( smilClip );
		}
		if( selectedToolId ){
			this.setCurrentToolId( selectedToolId );
		}				
		
		$toolsContainer = $j('<div />')
		.addClass( 'editToolsContainer' )
		.css( {
			'height': '80%',
			'overflow': 'auto'
		})
		.append( 
			$j('<ul />') 
		);
				
		this.sequencer.getEditToolTarget().empty().append(
			$toolsContainer
		);
		// Get the entire tool set based on what "ref type" smilClip is:
		var toolSet =  this.getToolSet(  
							this.sequencer.getSmil().getRefType( 
								this.getCurrentSmilClip() 
							) 
						);
		mw.log( 'Adding ' + toolSet.length + ' tools for ' + this.sequencer.getSmil().getRefType( this.getCurrentSmilClip() ) );
		
		$j.each( toolSet, function( inx, toolId ){
			
			var tool = _this.tools[ toolId ];
			
			// set the currentTool if not already set 
			if(!_this.currentToolId){
				_this.currentToolId = toolId;
			}
			
			// Append the title to the ul list
			$toolsContainer.find( 'ul').append( 
				$j('<li />').append( 
					$j('<a />')
					.attr('href', '#tooltab_' + toolId )
					.text( gM('mwe-sequencer-tools-' + toolId) ) 
				)
			);
			
			// Append the tooltab container
			$toolsContainer.append(
				$j('<div />')
				.css({'height' : '100%' })
				.attr('id', 'tooltab_' + toolId )		
				.append(
					$j('<h3 />').text( gM('mwe-sequencer-tools-' + toolId + '-desc') )
				)
			)
			var $toolContainer = $toolsContainer.find( '#tooltab_' + toolId );
			
			// Build out the attribute list for the given tool: 
			for( var i=0; i < tool.editableAttributes.length ; i++ ){
				attributeName = tool.editableAttributes[i];
				$toolContainer.append(
					_this.getEditableAttribute( smilClip, toolId, attributeName )
				);
			}
			
			// Output a float divider: 
			$toolContainer.append( $j('<div />').addClass('ui-helper-clearfix') );
			
			// Build out tool widgets 
			if( tool.editWidgets ){
				for( var i =0 ; i < tool.editWidgets.length ; i ++ ){
					var editWidgetId = tool.editWidgets[i];
					if( ! _this.editWidgets[editWidgetId] ){
						mw.log("Error: not recogonized widget: " + editWidgetId);
						continue;
					}
					// Append a target for the edit widget:
					$toolContainer.append( 
						$j('<div />')
						.attr('id', 'editWidgets_' + editWidgetId)
					);			
					// Draw the binded widget:
					_this.editWidgets[editWidgetId].draw( 
						_this, 
						$j( '#editWidgets_' + editWidgetId ),
						smilClip
					)
					// Output a float divider: 
					$toolContainer.append( $j('<div />').addClass( 'ui-helper-clearfix' ) );
				}	
			}				
		});
		
		// Add tab bindings
		$toolsContainer.tabs({
			select: function(event, ui) {
			
			}
		})
		// Build out global edit Actions buttons after the container
		for( var editActionId in this.editActions ){		
			$toolsContainer.after( 
				this.getEditAction( smilClip, editActionId )
			)	
		}
	},
	getCurrentSmilClip: function(){
		return this.currentSmilClip;
	},
	setCurrentSmilClip: function( smilClip ){
		this.currentSmilClip = smilClip;
	},
	getCurrentToolId: function(){
		return this.currentToolId;
	},
	setCurrentToolId: function( toolId ){
		this.currentToolId = toolId;
	},
	
	getEditAction: function( smilClip, editActionId ){		
		if(! this.editActions[ editActionId ]){
			mw.log("Error: getEditAction: " + editActionId + ' not found ');
			return ;
		}
		var _this = this;
		var editAction = this.editActions[ editActionId ];
		$actionButton = $j.button({
				icon: editAction.icon, 
				text: editAction.title
			})
			.css({
				'float': 'left',
				'margin': '5px'
			})
			.click( function(){
				editAction.action( _this, smilClip );
			})
		return $actionButton;
	},
	/* get the editiable attribute input html */
	getEditableAttribute: function( smilClip, toolId, attributeName ){
		if( ! this.editableAttributes[ attributeName ] ){
			mw.log("Error: editableAttributes : " + attributeName + ' not found');
			return; 
		}
		var _this = this;
		var editAttribute = this.editableAttributes[ attributeName ];
		var editType = editAttribute.type;
		if( !_this.editableTypes[ editType ] ){
			mw.log(" Error: No editableTypes interface for " + editType);
			return ;	
		}
		var initialValue =  _this.editableTypes[ editType ].getSmilVal(
			_this, 
			smilClip, 
			attributeName
		);
		// Set the default input size 
		var inputSize = ( _this.editableAttributes[ attributeName ].inputSize)? 
				_this.editableAttributes[ attributeName ].inputSize : 6;
		
		return $j( '<div />' )
			.css({
				'float': 'left',
				'font-size': '12px',				
				'border': 'solid thin #999',
				'background-color': '#EEE',
				'padding' : '2px',
				'margin' : '5px'
			})
			.addClass('ui-corner-all')
			.append( 
				$j('<span />')
				.css('margin', '5px')
				.text( editAttribute.title ),
				
				$j('<input />')
				.attr( {
					'id' : _this.getEditToolInputId( toolId, attributeName),
					'size': inputSize
				})
				.data('initialValue', initialValue )
				.sequencerInput( _this.sequencer )
				.val( initialValue )
				.change(function(){					
					// Run the editableType update function: 
					_this.editableTypes[ editType ].update( 
							_this, 
							smilClip, 
							attributeName, 
							$j( this ).val() 
					);				
					// widgets can bind directly to this change action. 					
				})
			);
	}		
}

} )( window.mw );