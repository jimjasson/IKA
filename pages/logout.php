<?php

session_start();

if ( isset( $_SESSION[ 'logged_in' ] ) ) {
	unset( $_SESSION[ 'logged_in' ] );
	header( "location: /IKA/index.php" );
}

?>