<?php

session_start();

$mysqli = new mysqli( "localhost", "root", "root", "IKA" );

require 'validate.php';
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var password; 
		var confirm_password;
		$( '#name_error' ).hide()
		$( '#surname_error' ).hide()
		$( '#father_name_error' ).hide()
		$( '#mother_name_error' ).hide()
		$( '#afm_error' ).hide()
		$( '#password_error' ).hide()

		$( '#name' ).on( 'input', function() {
			var input=$(this);
			var only_letters_and_spaces = /^[a-zA-Z\s]*$/;
			var is_valid = only_letters_and_spaces.test( input.val() )
			if( ! is_valid ) {
				$( '#name_error' ).show()
				$( '#submit_register_button').hide()
			} else {
				$( '#name_error' ).hide()
				$( '#submit_register_button').show()
			}
		});

		$( '#surname' ).on( 'input', function() {
			var input=$(this);
			var only_letters_and_spaces = /^[a-zA-Z\s]*$/;
			var is_valid = only_letters_and_spaces.test( input.val() )
			if( ! is_valid ) {
				$( '#surname_error' ).show()
				$( '#submit_register_button').hide()
			} else {
				$( '#surname_error' ).hide()
				$( '#submit_register_button').show()
			}
		});

		$( '#father_name' ).on( 'input', function() {
			var input=$(this);
			var only_letters_and_spaces = /^[a-zA-Z\s]*$/;
			var is_valid = only_letters_and_spaces.test( input.val() )

			if( ! is_valid ) {
				$( '#father_name_error' ).show()
				$( '#submit_register_button').hide()
			} else {
				$( '#father_name_error' ).hide()
				$( '#submit_register_button').show()
			}
		});

		$( '#mother_name' ).on( 'input', function() {
			var input=$(this);
			var only_letters_and_spaces = /^[a-zA-Z\s]*$/;
			var is_valid = only_letters_and_spaces.test( input.val() )
			if( ! is_valid ) {
				$( '#mother_name_error' ).show()
				$( '#submit_register_button').hide()
			} else {
				$( '#mother_name_error' ).hide()
				$( '#submit_register_button').show()
			}
		});

		$( '#afm' ).on( 'input', function() {
			var input=$(this);
			var only_letters_and_spaces = /^\d{9}$/;
			var is_valid = only_letters_and_spaces.test( input.val() )
			if( ! is_valid ) {
				$( '#afm_error' ).show()
				$( '#submit_register_button').hide()
			} else {
				$( '#afm_error' ).hide()
				$( '#submit_register_button').show()
			}
		});

		$( '#password' ).on( 'input', function() {
			var input=$(this);
			password = input.val()
			if( ! empty( input.val() ) ) {
				if( confirm_password != password ) {
					$( '#password_error' ).show()
					$( '#submit_register_button').hide()
				} else {
					$( '#password_error' ).hide()
					$( '#submit_register_button').show()
				}
			}
		});

		$( '#confirm_password' ).on( 'input', function() {
			var input=$(this);
			confirm_password = input.val()
			if ( '' !== input.val() ) {
				if( confirm_password != password ) {
					$( '#password_error' ).show()
					$( '#submit_register_button').hide()
				} else {
					$( '#password_error' ).hide()
					$( '#submit_register_button').show()
				}
			}
		});

	
	});
	
</script>

<html>

<head>
<title>ΕΓΓΡΑΦΗ | ΙΚΑ</title>
<link rel="icon" href="/IKA/data/images/ika.jpg">

<link rel="stylesheet" type="text/css" href="/IKA/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/register.css" media="screen" />


<!-- Logo --> 
<div class="logo">
	<a href="/IKA/index.php">
		 <img src="/IKA/data/images/ika.jpg">
	</a>
</div>

<!-- Register and Login --> 

<?php
	if ( isset( $_SESSION[ 'logged_in' ] ) ) {
	?>
	<div class="profile_mini_container">
		<p class="welcome"> Καλωσορίσατε, <?php echo $_SESSION[ 'username' ]; ?> ! </p>
		<p class="my_profile"> ΤΟ ΠΡΟΦΙΛ ΜΟΥ </p>
		<a href="/IKA/pages/register.php">
			<p class="logout"> ΑΠΟΣΥΝΔΕΣΗ </p>
		</a>
	</div>
<?php } else { ?>
<div class="top_corner_register">
	<a href="/IKA/pages/register.php">
		 <button class="register_button"><span> Εγγραφή </span></button>
	</a>
</div>
<div class="top_corner_login">
	<a href="/IKA/pages/login.php">
	<button class="login_button"><span> Σύνδεση </span></button>
	</a>
</div>
<?php 
	}
?>

</head>

<body>

<!-- Top navigation menu --> 

<div id='top_nav_menu'>
	<ul>
		 <li class="active"><a href='/IKA/index.php'><span>ΑΡΧΙΚΗ ΣΕΛΙΔΑ</span></a></li>
		 <li><a href='#'><span>ΑΣΦΑΛΙΣΜΕΝΟΙ</span></a></li>
		 <li class='last'><a href='/IKA/pages/pensioners.php'><span>ΣΥΝΤΑΞΙΟΥΧΟΙ</span></a></li>
		 <li> 
			<form action="#" method="get"> </li>
			<input type="text" name="search"  class="search_field" placeholder="Αναζήτηση...">
				<button class="search_button" type="submit" style="cursor:pointer;"> Πάμε! </button> 
		 </form>
	</ul>
</div>

<div class="home_menu_wrapper">
	
	<div id="name_error" class="name_error">
		<div class="content"> Το Όνομα μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά. </div>
	</div>
	<div id="surname_error" class="surname_error">
		<div class="content"> Το Επίθετο μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά. </div>
	</div>
	<div id="father_name_error" class="father_name_error">
		<div class="content"> Το Όνομα Πατρός μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά. </div>
	</div>
	<div id="mother_name_error" class="mother_name_error">
		<div class="content"> Το Όνομα Μητρός μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά. </div>
	</div>
	<div id="afm_error" class="afm_error">
		<div class="content"> Το Α.Φ.Μ. μπορεί να περιέχει ακριβώς 9 ψηφία. </div>
	</div>
	<div id="password_error" class="password_error">
		<div class="content"> Ασυμφωνία κωδικών πρόσβασης. </div>
	</div>
 <div class="register_form">

	<div class="title"> Εγγραφή νέου χρήστη </div>

	<form class="form" action="/IKA/pages/register.php" method="post" enctype="multipart/form-data" autocomplete="off">
		<input type="text"  class="register_input" placeholder="Όνομα" id="name" name="name" required />
		<input type="text"  class="register_input" placeholder="Επώνυμο" id="surname" name="surname" required />
		<input type="text"  class="register_input" placeholder="Όνομα Πατρός" id="father_name" name="father_name" required />
		<input type="text"  class="register_input" placeholder="Όνομα Μητρός" id="mother_name" name="mother_name" required />
		<input type="text"  class="register_input" placeholder="Α.Φ.Μ." id="afm" name="afm" required />
		<input type="email"  class="register_input" placeholder="E-mail" name="email" required />
		<input type="text"  class="register_input" placeholder="Όνομα χρήστη (username)" name="username" required />
		<input type="password"  class="register_input" placeholder="Κωδικός Πρόσβασης" id="password" name="password" required />
		<input type="password"  class="register_input" placeholder="Επιβεβαίωση Κωδικού Πρόσβασης" id="confirm_password" name="confirm_password" required />
		<div id="submit_register_button" class="submit_button">
			<input type="submit" value="Εγγραφή" class="register_button" name="register" />
		</div>
	</form>

	
 </div>

<!-- Footer --> 

	<div class="footer">
		<div class="contact">
			<p class="title"> Επικοινωνία </p>
			<img src="/IKA/data/images/phone.png">
			<p class="number"> 2101234567 </p>
		</div>
		<div class="schedule">
			<p class="title"> Ωράριο Καταστημάτων </p>
			<img src="/IKA/data/images/office.png">
			<p class="time"> Δευτέρα - Παρασκευή 09:00 - 14:00</p>
		</div>
		<div class="sitemap">
			<p class="title"> Sitemap </p>
		</div>
		<div class="map_context">
			<p class="title"> Αναζητήστε το κοντινότερο γραφείο ΙΚΑ! </p>
		</div>
		<div class="map">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50314.89399439727!2d23.69164977910156!3d37.9845762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd2ff04f0f75%3A0xfb57f9bf53a6a952!2zzpnOms6RIC0gzpXOpM6Rzpw!5e0!3m2!1sel!2sgr!4v1512060477783" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
	 </div>
	</div>

</div>

</body>

</html>