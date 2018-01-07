<?php

session_start();

$mysqli = new mysqli( "localhost", "root", "root", "IKA" );

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

require 'calculate_pension.php';

?>

<html>
<title>ΥΠΟΛΟΓΙΣΜΟΣ ΣΥΝΤΑΞΗΣ | ΙΚΑ</title>
<head>

<link rel="stylesheet" type="text/css" href="/IKA/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/pensioners.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/pensioners_calculation.css" media="screen" />

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
		<a href="/IKA/pages/logout.php">
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
		<button id="redirect_to_login" class="login_button"><span> Σύνδεση </span></button>
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
		 <li><a href='/IKA/index.php'><span>ΑΡΧΙΚΗ ΣΕΛΙΔΑ</span></a></li>
		 <li><a href='#'><span>ΑΣΦΑΛΙΣΜΕΝΟΙ</span></a></li>
		 <li class='active last'><a href='#'><span>ΣΥΝΤΑΞΙΟΥΧΟΙ</span></a></li>
		 <li> 
			<form action="#" method="get"> </li>
			<input type="text" name="search"  class="search_field" placeholder="Αναζήτηση...">
				<button class="search_button" type="submit" style="cursor:pointer;"> Πάμε! </button> 
		 </form>
	</ul>
</div>


<div class="home_menu_wrapper">
	<div class="breadcrumb_container">
	<ul class="breadcrumb">
		  <li><a href="/IKA/index.php">Αρχική Σελίδα</a></li>
		  <li><a href="/IKA/pages/pensioners.php">Συνταξιούχοι</a></li>
		  <li><a href="/IKA/pages/pensioners_about.php"> Δικαιούμαι Σύνταξη;</a></li>
		  <li>Υπολογισμός Σύνταξης</li>
	</ul> 
	</div>
	<div class="calculation_form">
		<span class="title"> Υπολογισμός Σύνταξης </span>

		<form class="form" action="/IKA/pages/pensioners_calculation.php" method="post" enctype="multipart/form-data" autocomplete="off">
			<label for="hours">
	 		 	Εργατοώρες: <input type="number" class="calculation_input" id="hours" name="hours" required>
			</label>
			<label for="salary">
	 		 	Μισθός τελευταίων 5 χρόνων: 
	 		 	<input type="number" class="calculation_input" id="salary1" name="salary1" required>
	 		 	<div class="left_margin"><input type="number" class="calculation_input" id="salary2" name="salary2" required></div>
				<div class="left_margin"><input type="number" class="calculation_input" id="salary3" name="salary3" required></div>
	 		 	<div class="left_margin"><input type="number" class="calculation_input" id="salary4" name="salary4" required></div>
	 		 	<div class="left_margin"><input type="number" class="calculation_input" id="salary5" name="salary5" required></div>
			</label>
			<label for="pension_type">
				Τύπος Σύνταξης: <input type="radio" class="calculation_input" value="age_pension" name="radio" checked> Γήρατος 
				<div class="left_radio">
				<input type="radio" class="calculation_input" value="disability_pension" name="radio"> Αναπηρίας <br>
				<input type="radio" class="calculation_input" value="death_insured" name="radio" > Θάνατος Ασφαλισμένου <br>
				<input type="radio" class="calculation_input" value="death_pensioner" name="radio" > Θάνατος Συνταξιούχου </div>
			</label>
			<div id="submit_register_button" class="submit_button">
				<input type="submit" value="Υπολογισμός" class="register_button" name="calculate" />
			</div>
		</form>
	</div>
	
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