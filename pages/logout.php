<?php

session_start();

if ( isset( $_SESSION[ 'logged_in' ] ) ) {
	unset( $_SESSION[ 'logged_in' ] );
	if ( isset( $_SESSION['url'] ) ) {
		$url = $_SESSION['url'];
		header( "location: $url" );
	} else {
		header( "location: /IKA/index.php" );
	}
}

?>