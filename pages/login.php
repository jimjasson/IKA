<?php

session_start();

$mysqli = new mysqli( "localhost", "root", "root", "IKA" );

unset( $_SESSION[ 'logged_in' ] );

require 'login_validation.php';

?>
<html>

<head>

<link rel="stylesheet" type="text/css" href="/IKA/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/login.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/register.css" media="screen" />



<!-- Logo --> 
<div class="logo">
	<a href="/IKA/index.php">
		 <img src="/IKA/data/images/ika.jpg">
	</a>
</div>

<!-- Register and Login --> 

<div class="top_corner_register">
	<button class="register_button"><span> Εγγραφή </span></button>
</div>
<div class="top_corner_login">
	<button class="login_button"><span> Σύνδεση </span></button>
</div>

</head>

<body>

<!-- Top navigation menu --> 

<div id='top_nav_menu'>
	<ul>
		 <li class='active'><a href='#'><span>ΑΡΧΙΚΗ ΣΕΛΙΔΑ</span></a></li>
		 <li><a href='#'><span>ΑΣΦΑΛΙΣΜΕΝΟΙ</span></a></li>
		 <li class='last'><a href='#'><span>ΣΥΝΤΑΞΙΟΥΧΟΙ</span></a></li>
		 <li> 
			<form action="#" method="get"> </li>
			<input type="text" name="search" class="search_field" placeholder="Αναζήτηση...">
				<button class="search_button" type="submit" style="cursor:pointer;"> Πάμε! </button> 
		 </form>
	</ul>
</div>

<div class="home_menu_wrapper">
	<div class="login_form">


		<p class="title"> Σύνδεση χρήστη </p>

		<form class="form" action="/IKA/pages/login.php" method="post" enctype="multipart/form-data" autocomplete="off">
			<input type="text"  class="login_input" placeholder="Όνομα χρήστη (username)" name="username" required />
			<input type="password"  class="login_input" placeholder="Κωδικός Πρόσβασης" id="password" name="password" required />
			<div class="login_button_area">
				<input type="submit" value="Login" class="login_button" name="login" />
			</div>
		</form>

		<p class="new_user"> Νέος χρήστης; 
			<button class="register_button"><span> Εγγραφή </span></button>
		</p>

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