( function( $, data ) {

	"use strict";

	var __tmElementor = {

		init: function() {

			if ( ! _.isEmpty( data.widgets ) ) {
				_.each( data.widgets, __tmElementor.widgetsWalker );
			}

		},

		widgetsWalker: function( widget ) {
			console.log( widget );
			elementor.hooks.addAction( 'panel/open_editor/widget/wp-widget-' + widget, __tmElementor.initCb );
		},

		initCb: function( panel, model, view ) {

			var initInterval;

			initInterval = setInterval( function() {

				var $controls = panel.$el.find( '.widget-content' );

				if ( $controls.length ) {

					window.clearInterval( initInterval );

					if ( CherryJsCore.ui_elements.iconpicker && window.cherry5IconSets ) {
						console.log( 123 );
						CherryJsCore.ui_elements.iconpicker.setIconsSets( window.cherry5IconSets );
					}

					$( 'body' ).trigger( {
						type: 'cherry-ui-elements-init',
						_target: $controls
					} );
				}
			}, 200 );

		}

	};

	__tmElementor.init();

}( jQuery, window.__tmEditData ) );
