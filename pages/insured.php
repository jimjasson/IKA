<?php

session_start();

$mysqli = new mysqli( "localhost", "root", "root", "IKA" );

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>

<html>

<head>
<title>ΑΣΦΑΛΙΣΜΕΝΟΙ | ΙΚΑ</title>
<link rel="icon" href="/IKA/data/images/ika.jpg">


<link rel="stylesheet" type="text/css" href="/IKA/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/insured.css" media="screen" />


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
		 <li class='active last'><a href='#'><span>ΑΣΦΑΛΙΣΜΕΝΟΙ</span></a></li>
		 <li><a href='/IKA/pages/pensioners.php'><span>ΣΥΝΤΑΞΙΟΥΧΟΙ</span></a></li>
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
			  <li>Ασφαλισμένοι</li>
		</ul> 
	</div>
	<div class="insured_menu">
	<ul>
		<a href='/IKA/pages/insured_about.php' style="color:black"><li class="first">ΕΙΜΑΙ ΑΣΦΑΛΙΣΜΕΝΟΣ;</li></a>
		<a href='/IKA/pages/under_construction.php' style="color:black"><li class="second" >ΤΙ ΑΠΟΔΟΧΕΣ ΛΑΜΒΑΝΩ ΟΤΑΝ ΒΡΙΣΚΟΜΑΙ ΣΕ ΑΔΕΙΑ;</li></a>
		<a href='/IKA/pages/under_construction.php' style="color:black"><li class="third">ΠΩΣ ΜΠΟΡΩ ΝΑ ΑΣΦΑΛΙΣΩ ΠΡΟΣΤΑΤΕΥΟΜΕΝΟ ΜΕΛΟΣ;</li></a>
		<a href='/IKA/pages/under_construction.php' style="color:black"><li class="fourth">ΣΥΧΝΕΣ ΕΡΩΤΗΣΕΙΣ</li></a>
	</ul>
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