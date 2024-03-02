/**
 * Custom scripts for Radio Image Control
 *
 * @package Canary Led
 */

wp.customize.controlConstructor['radio-image'] = wp.customize.Control.extend({
	ready: function() {
		'use strict';
		var control = this;
		// Change the value
		this.container.on( 'click', 'input', function() {
			control.setting.set( jQuery( this ).val() );
		});
	}
});