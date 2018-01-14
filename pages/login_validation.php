<?php
// The form has been submitted with post method
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {

	$password = md5( $_POST[ 'password' ] );
	$username = $_POST[ 'username' ];

	$_SESSION[ 'username' ] = $username;

	$sql = "SELECT * FROM accounts WHERE USERNAME='$username' AND PASSWORD='$password'";
	
	$result = $mysqli->query( $sql );

	if ( $result->num_rows !== 0 ) {
		$_SESSION[ 'logged_in'] = "yes";
		$message = "Επιτυχής Σύνδεση!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
		if ( isset( $_SESSION['url'] ) || ! $_SESSION['url'] === "/IKA/pages/login.php" ) {
			$url = $_SESSION['url'];
			echo "<script type='text/javascript'>window.location = '$url';</script>";
		} else {
			echo "<script type='text/javascript'>window.location = /IKA/index.php;</script>";
		}
	} else {
		$message = "Τα στοιχεία που δώσατε δεν αντιστοιχούν σε κάποιον εγγεγραμμένο χρήστη.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}

?>
