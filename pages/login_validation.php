<?php
// The form has been submitted with post method
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {

	$password = md5( $_POST[ 'password' ] );
	$username = $_POST[ 'username' ];

	error_log($username);
	error_log($password);

	$_SESSION[ 'username' ] = $username;

	$sql = "SELECT * FROM accounts WHERE USERNAME='$username' AND PASSWORD='$password'";
	
	$result = $mysqli->query( $sql );

	if ( $result->num_rows !== 0 ) {
		$_SESSION[ 'logged_in'] = "yes";
		header("location: /IKA/index.php");
	}
}

?>
