<?php

session_start();

$mysqli = new mysqli( "localhost", "root", "root", "sdi1400220" );

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>

<html>
<title> ΑΝΗΛΙΚΑ ΤΕΚΝΑ </title>
<link rel="icon" href="/IKA/data/images/ika.jpg">

<head>

<link rel="stylesheet" type="text/css" href="/IKA/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/pensioners.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/pensioners_children.css" media="screen" />

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
</div>s

<!-- Register and Login --> 
<?php
	if ( isset( $_SESSION[ 'logged_in' ] ) ) {
	?>
	<div class="profile_mini_container">
		<p class="welcome"> Καλωσορίσατε, <?php echo $_SESSION[ 'username' ]; ?> ! </p>
		<a href="/IKA/pages/profile.php">
			<p class="my_profile"> ΤΟ ΠΡΟΦΙΛ ΜΟΥ </p>
		</a>
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
		 <li><a href='/IKA/pages/insured.php'><span>ΑΣΦΑΛΙΣΜΕΝΟΙ</span></a></li>
		 <li class='active last'><a href='/IKA/pages/pensioners.php'><span>&nbsp; ΣΥΝΤΑΞΙΟΥΧΟΙ</span></a></li>
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
	<div class="breadcrumb_container">
	<ul class="breadcrumb">
		  <li><a href="/IKA/index.php">Αρχική Σελίδα</a></li>
		  <li><a href="/IKA/pages/pensioners.php">Συνταξιούχοι</a></li>
		  <li><a href="/IKA/pages/pensioners_about.php">Δικαιούμαι Σύνταξη;</a></li>
		  <li> Ανήλικα Τέκνα</li>
	</ul> 
	</div>
	<div class="info_container">
		<span class="title">Ανήλικα Τέκνα</span>
		<span class="first">Αν έχετε ανήλικα τέκνα και επιθυμείτε να βγείτε σε μειωμένη σύνταξη πρέπει να έχετε συμπληρώσει 5.550 εργατοώρες.</span>
		<?php
		if ( isset( $_SESSION[ 'logged_in' ] ) ) {
		?>
		<span class="third">Για να δείτε πόσα ένσημα έχετε συγκεντρώσει πρέπει να <a href="/IKA/pages/under_construction.php">περιηγηθείτε στο Προφίλ σας</a></span>.
		<?php } else { ?>
		<span class="third">Για να δείτε πόσα ένσημα έχετε συγκεντρώσει πρέπει να <a href="/IKA/pages/login.php">συνδεθείτε στο Προφίλ σας</a>. Αν
			είστε καινούριος χρήστης, πρέπει πρώτα να <a href="/IKA/pages/register.php"> εγγραφείτε στην υπηρεσία</a>.</span>
		<?php 
		}
		?>
		<span class="second"> Για να υπολογίσετε το ποσό της σύνταξής σας, μπορείτε να χρησιμοποιήσετε τον <a href="/IKA/pages/pensioners_calculation.php"> Υπολογισμό Σύνταξης</a>.</span>

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