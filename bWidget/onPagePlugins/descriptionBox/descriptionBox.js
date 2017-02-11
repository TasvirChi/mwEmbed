bWidget.addReadyCallback( function( playerId ){
	var bdp = document.getElementById( playerId );
	// Shortcut to get config:
	var gc = function( attr ){
		return bdp.evaluate('{descriptionBox.' + attr + '}' );
	}
	
	var addDescriptionBox = function(){
		var descriptionTitle	= gc( 'descriptionLabel') || bdp.evaluate('{mediaProxy.entry.name}');
		// check for target:
		var boxTargetID = gc( 'boxTargetId' ) || 'descriptionBox_' + playerId;

		// if no box target ( remove )
		if( ! gc( 'boxTargetId' ) || gc( 'boxTargetId' ) == "null" ){
			$( '#' + boxTargetID ).remove();
		}
		// Add box target if missing from page:
		if( !$('#' + boxTargetID ).length ){
			var $descBox = $("<div>")
				.attr("id", boxTargetID )
				.css({
					"height" : gc( 'boxHeight' ),
					'width' : gc( 'boxWidth' ) || null
				})
				// for easy per site theme add bWidget class:
				.addClass('bWidget-descriptionBox');
			// check for where it should be appended:
			switch( gc('boxLocation') ){
				case 'before':
					$(bdp)
						.css( 'float', 'none')
						.before( $descBox );
				break;
				case 'left':
					$descBox.css('float', 'left').insertBefore(bdp);
					$(bdp).css('float', 'left');
				break;
				case 'right':
					$descBox.css('float', 'left').insertAfter( bdp );
					$(bdp).css('float', 'left' );
				break;
				case 'after':
				default:
					$(bdp)
						.css( 'float', 'none')
						.after( $descBox );
				break;
			};
		}
		// Empty any old description box
		$( '#' + boxTargetID )
			.empty()
			.append(
				$( "<h2>" ).text( descriptionTitle ),
				$( "<p>" ).html( bdp.evaluate('{mediaProxy.entry.description}') )
			)
	}
	window['descriptionBoxMediaReady'] = function(){
		addDescriptionBox();
	};
	bdp.addJsListener( "mediaReady", "descriptionBoxMediaReady" );
});