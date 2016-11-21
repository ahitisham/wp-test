<?php

/**
* Register Styles and Scripts
*/



















/*for bootestrape*/



/*add_action( 'wp_enqueue_scripts', 'ft_scripts_styles' );

function ft_scripts_styles() {

	if ( !is_admin() ) {

		// Use local copy & not Google CDN for jQuery in local development
		if ( ! WP_LOCAL_SERVER ) {
			// Google CDN jQuery
			wp_deregister_script( 'gmaps' );
			wp_register_script( 'gmaps', '/js/gmaps.js', array(), '1.7.1', true );
		}

		// Kill l10n
		wp_deregister_script( 'l10n' );

		wp_register_script( 'driver', plugins_url( 'driver.js', __FILE__ ), array( 'jquery' ), '0.1', true );

		wp_register_style( 'twitter-bootstrap', 'https://raw.github.com/twitter/bootstrap/master/bootstrap.min.css', array(), '1.4' );
		wp_register_style( 'main', plugins_url( 'style.css', __FILE__ ), array(), '0.1' );

		wp_enqueue_script( 'driver' );
		wp_enqueue_style( 'main' );

	}
}*/