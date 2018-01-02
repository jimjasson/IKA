<?php
// The form has been submitted with post method
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {

	$name        = $_POST[ 'name' ];
	$surname     = $_POST[ 'surname' ];
	$father_name = $_POST[ 'father_name' ];
	$mother_name = $_POST[ 'mother_name' ];
	$afm         = $_POST[ 'afm' ];
	$email       = $_POST[ 'email' ];
	$username    = $_POST[ 'username' ];
	$password    = md5( $_POST[ 'password' ] );

	$_SESSION[ 'username' ] = $username;
	$_SESSION[ 'logged_in'] = "yes";

	$sql = "INSERT INTO accounts ( NAME, SURNAME, FATHER_NAME, MOTHER_NAME, AFM, EMAIL, USERNAME, PASSWORD ) "
			. "VALUES ('$name', '$surname', '$father_name', '$mother_name', '$afm', '$email', '$username', '$password' )";

	$mysqli->query( $sql );
	header("location: /IKA/index.php");

}

?>
