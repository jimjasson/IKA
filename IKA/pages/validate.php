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

	$sql = "SELECT * FROM accounts WHERE USERNAME='$username' ";
	
	$result = $mysqli->query( $sql );
	$redirect = true;

	if ( $result->num_rows === 0 ) {
		$sql = "INSERT INTO accounts ( NAME, SURNAME, FATHER_NAME, MOTHER_NAME, AFM, EMAIL, USERNAME, PASSWORD ) "
		. "VALUES ('$name', '$surname', '$father_name', '$mother_name', '$afm', '$email', '$username', '$password' )";

		$mysqli->query( $sql );
		$_SESSION[ 'username' ] = $username;
		$_SESSION[ 'logged_in'] = "yes";
		
	} else {
		$redirect = false;
	}
}

?>

<script type="text/javascript">
<?php
	if ( $redirect ) {
 ?>
 window.location = '/IKA/index.php';
 <?php
	} else {
 ?>
  window.alert( "Υπάρχει ήδη χρήστης με τα στοιχεία που εισάγατε. Παρακαλούμε επιλέξτε διαφορετικό username." );
  window.location = '/IKA/pages/register.php';
<?php
	}
?>

</script>
