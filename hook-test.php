<?php

/**
 * Plugin Name: Hooks Test
 */

// Add Hello World to the login header page
add_action( 'login_header', 'hello_world' );
function hello_world() {
	echo 'Hello world!';
}

// Change the header url (WordPress Logo)
add_filter( 'login_headerurl', 'change_header_url' );
function change_header_url( $url ) {
	$url = 'https://sheldonfweb.com';
	return $url;
}

