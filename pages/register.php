<?php

session_start();

$mysqli = new mysqli( "localhost", "root", "root", "sdi1400220" );

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
				document.getElementById("submit_button").disabled = true;
			} else {
				$( '#name_error' ).hide()
				document.getElementById("submit_button").disabled = false;
			}
		});

		$( '#surname' ).on( 'input', function() {
			var input=$(this);
			var only_letters_and_spaces = /^[a-zA-Z\s]*$/;
			var is_valid = only_letters_and_spaces.test( input.val() )
			if( ! is_valid ) {
				$( '#surname_error' ).show()
				document.getElementById("submit_button").disabled = true;
			} else {
				$( '#surname_error' ).hide()
				document.getElementById("submit_button").disabled = false;
			}
		});

		$( '#father_name' ).on( 'input', function() {
			var input=$(this);
			var only_letters_and_spaces = /^[a-zA-Z\s]*$/;
			var is_valid = only_letters_and_spaces.test( input.val() )

			if( ! is_valid ) {
				$( '#father_name_error' ).show()
				document.getElementById("submit_button").disabled = true;
			} else {
				$( '#father_name_error' ).hide()
				document.getElementById("submit_button").disabled = false;
			}
		});

		$( '#mother_name' ).on( 'input', function() {
			var input=$(this);
			var only_letters_and_spaces = /^[a-zA-Z\s]*$/;
			var is_valid = only_letters_and_spaces.test( input.val() )
			if( ! is_valid ) {
				$( '#mother_name_error' ).show()
				document.getElementById("submit_button").disabled = true;
			} else {
				$( '#mother_name_error' ).hide()
				document.getElementById("submit_button").disabled = false;
			}
		});

		$( '#afm' ).on( 'input', function() {
			var input=$(this);
			var only_letters_and_spaces = /^\d{9}$/;
			var is_valid = only_letters_and_spaces.test( input.val() )
			if( ! is_valid ) {
				$( '#afm_error' ).show()
				document.getElementById("submit_button").disabled = true;
			} else {
				$( '#afm_error' ).hide()
				document.getElementById("submit_button").disabled = false;
			}
		});

		$( '#password' ).on( 'input', function() {
			var input=$(this);
			password = input.val()
			if( ! empty( input.val() ) ) {
				if( confirm_password != password ) {
					$( '#password_error' ).show()
					document.getElementById("submit_button").disabled = true;
				} else {
					$( '#password_error' ).hide()
					document.getElementById("submit_button").disabled = false;
				}
			}
		});

		$( '#confirm_password' ).on( 'input', function() {
			var input=$(this);
			confirm_password = input.val()
			if ( '' !== input.val() ) {
				if( confirm_password != password ) {
					$( '#password_error' ).show()
					document.getElementById("submit_button").disabled = true;
				} else {
					$( '#password_error' ).hide()
					document.getElementById("submit_button").disabled = false;
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

<div class="top_contact">
	<p class="title"> Κάλεσέ μας! </p>
	<img src="/IKA/data/images/phone.png">
	<p class="number"> 2101234567 </p>
</div>

<div class="store">
	<p class="title"> Βρες μας σ' ένα <a href="/IKA/pages/under_construction.php"> κατάστημα</a>! </p>
	<img src="/IKA/data/images/office.png">
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
		 <li><a href='/IKA/pages/insured.php'><span>ΑΣΦΑΛΙΣΜΕΝΟΙ</span></a></li>
		 <li><a href='/IKA/pages/pensioners.php'><span>&nbsp; ΣΥΝΤΑΞΙΟΥΧΟΙ</span></a></li>
		 <li><a href='/IKA/pages/under_construction.php'><span>&nbsp; &nbsp; &nbsp; ΕΡΓΟΔΟΤΕΣ</span></a></li>
		 <li class='last'><a href='/IKA/pages/under_construction.php'><span>ΦΟΡΕΙΣ</span></a></li>
		 <li class='last'> 
		<input type="text" name="search"  class="search_field" placeholder="Αναζήτηση...">
			</li>
		<a href="/IKA/pages/under_construction.php">
		<button class="search_button" type="submit" style="cursor:pointer;"> Πάμε! </button> 
		</a>
	</ul>
</div>

<div class="home_menu_wrapper">
	
	<div id="name_error" class="error">
		<div class="content"> Το Όνομα μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά. </div>
	</div>
	<div id="surname_error" class="error">
		<div class="content"> Το Επίθετο μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά. </div>
	</div>
	<div id="father_name_error" class="error">
		<div class="content"> Το Όνομα Πατρός μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά. </div>
	</div>
	<div id="mother_name_error" class="error">
		<div class="content"> Το Όνομα Μητρός μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά. </div>
	</div>
	<div id="afm_error" class="error">
		<div class="content"> Το Α.Φ.Μ. μπορεί να περιέχει ακριβώς 9 ψηφία. </div>
	</div>
	<div id="password_error" class="error">
		<div class="content"> Ασυμφωνία κωδικών πρόσβασης. </div>
	</div>
 <div class="register_form">

	<div class="title"> Εγγραφή νέου χρήστη </div>

	<form class="form" action="/IKA/pages/register.php" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="column">
		<label for="name"> Όνομα </label> <div class="tooltip"><input type="text"  class="register_input" id="name" name="name" required /> <span class="tooltiptext"> Το Όνομα μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά.</span> </div> <br>
		<label for="surname"> Επώνυμο </label>  <div class="tooltip"> <input type="text"  class="register_input" id="surname" name="surname" required /> <span class="tooltiptext"> Το Επίθετο μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά.</span> </div>  <br>
		<label for="father_name"> Όνομα Πατρός  </label> <div class="tooltip"> <input type="text"  class="register_input" id="father_name" name="father_name" required /> <span class="tooltiptext"> Το Όνομα Πατρός μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά.</span> </div> <br>
		<label for="mother_name"> Όνομα Μητρός </label> <div class="tooltip"> <input type="text"  class="register_input"  id="mother_name" name="mother_name" required /> <span class="tooltiptext"> Το Όνομα Μητρός μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και κενά.</span> </div> <br>
		<label for="afm"> Α.Φ.Μ. </label> <div class="tooltip"> <input type="text"  class="register_input" id="afm" name="afm" required />  <br>
		<span class="tooltiptext"> Το Α.Φ.Μ. πρέπει να περιέχει ακριβώς 9 ψηφία.</span> </div></div>
		<div class="column">
		<label for="email"> E-mail </label> <input type="email"  class="register_input" name="email" required />  <br>
		<label for="username"> Username </label> <input type="text" class="register_input"  name="username" required /> <br>
		<label for="password"> Κωδικός Πρόσβασης </label><input type="password"  class="register_input"  id="password" name="password" required /> <br>
		<label for="confirm_password"> Επιβεβαίωση κωδικού πρόσβασης </label> <input type="password"  class="register_input"  id="confirm_password" name="confirm_password" required /> <br>
		
		<div id="submit_register_button" class="submit_button">
			<input id="submit_button" type="submit" value="Εγγραφή" class="register_button" name="register" />
		</div>
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
			<p class="time"> Δευτέρα - Παρασκευή <br> 09:00 - 14:00</p>
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