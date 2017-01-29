( function( mw, $ ) {"use strict";

	mw.PluginManager.add( 'logo', mw.KBaseComponent.extend({

		defaultConfig: {
			parent: "controlsContainer",
			order: 41,
			displayImportance: 'low',
			align: "right",
			cssClass: "borhan-logo",
			href: 'http://www.borhan.com',
			title: 'Borhan',
			img: null
		},
		getComponent: function() {
			if( !this.$el ) {
				var $img = [];
				if( this.getConfig('img') ){
					$img = $( '<img />' )
								.attr({
									alt: this.getConfig('title'),
									src: this.getConfig('img')
								});
				}
				this.$el = $('<div />')
					.addClass ( this.getCssClass() )
					.addClass('btn')
					.append(
					$( '<a />' )
						.addClass('btnFixed')
						.attr({
							'title': this.getConfig('title'),
							'target': '_blank',
							'href': this.getConfig('href')
						}).append( $img )
					);
			}
			// remove Borhan logo image if we have a custom logo icon
			if (this.getConfig('img') != null){
				this.$el.removeClass('borhan-logo');
			}
			return this.$el;
		}

	}));

} )( window.mw, window.jQuery );