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
		
		if ( isset( $_SESSION['url'] ) ) {
			$url = $_SESSION['url'];
			header( "location: $url" );

		} else {
			header( "location: /IKA/index.php" );
		}
	} else {
		$message = "Τα στοιχεία που δώσατε δεν αντιστοιχούν σε κάποιον εγγεγραμμένο χρήστη.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}

?>
