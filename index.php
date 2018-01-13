<?php

session_start();

$mysqli = new mysqli( "localhost", "root", "root", "sdi1400220" );

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>

<html>
<title>ΑΡΧΙΚΗ ΣΕΛΙΔΑ | ΙΚΑ</title>
<link rel="icon" href="/IKA/data/images/ika.jpg">

<head>

<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />

<!-- Logo --> 
<div class="logo">
	<a href="/IKA/index.php">
		 <img src="data/images/ika.jpg">
	</a>
</div>

<div class="top_contact">
	<p class="title"> Κάλεσέ μας! </p>
	<img src="data/images/phone.png">
	<p class="number"> 2101234567 </p>
</div>

<div class="store">
	<p class="title"> Βρες μας σ' ένα <a href="/IKA/pages/under_construction.php"> κατάστημα</a>! </p>
	<img src="data/images/office.png">
</div>

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
		 <li class='active'><a href='#'><span>ΑΡΧΙΚΗ ΣΕΛΙΔΑ</span></a></li>
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

	<p style="font-family: 'Didact Gothic', sans-serif;font-size: 25px;margin-left:24%;"><i>Ψάχνεις υπηρεσίες για... </i></p>
	<div class="home_left_menu">
		<a href="/IKA/pages/insured.php">
			<img src="data/images/asfalismenoi_banner.jpg">
			<div class="centered"> <b> Ασφαλισμένους; </b></div>
		</a>
	</div>
	
	<div class="home_right_menu">
		<a href="/IKA/pages/pensioners.php">
			<img src="data/images/syntaxiouxoi_banner.jpg">
			<div class="centered"> <b> Συνταξιούχους; </b> </div>
		</a>
	</div>

	<div class="employers">
		<a href="/IKA/pages/under_construction.php">
			<img src="data/images/ergodotes_banner.jpg">
			<div class="centered"> <b> Εργοδότες; </b> </div>
		</a>
	</div>

	<div class="foreis">
		<a href="/IKA/pages/under_construction.php">
			<img src="data/images/foreis_banner.jpg">
			<div class="centered"> <b> Φορείς; </b> </div>
		</a>
	</div>

	<div class="notification_banner">
		<div class="centered"> Μήπως ψάχνεις τις βεβαιώσεις;</div>
	</div>

	<div class="notification_banner_border">
	<?php if ( isset( $_SESSION[ 'logged_in' ] ) ) {
		?>
		<div class="top"> Είναι <a href="/IKA/pages/profile_info.php" style="color:#9EB5A8"> στο προφίλ σου </a>!</div>
		<?php } else { ?>
			<div class="top"> Είναι στο προφίλ σου!</div>
			<div class="bottom"> Κάνε <u> <a href="/IKA/pages/login.php" style="color:#9EB5A8"> σύνδεση </a> </u> ή <u> <a href="/IKA/pages/register.php" style="color:#9EB5A8"> εγγραφή </a> </u> για να τις δεις!</div>
		<?php 
		}
	?>
	</div>

<!--Sidebar --> 

	<div class="sidebar">
	<h1 class="announcments_title"> Ανακοινώσεις </h1>
	<div class="announcments_seperator"></div>
	<div class="announcments_context">
		<p class="announcments_title" align="justify"> Καλως ορίσατε στην καινούρια μας ιστοσελίδα! </p>
		<p class="announcments_date" align="justify"> 15 Ιανουαρίου 2018 </p>
		<p class="announcments_body" align="justify"> Σας παρουσιάζουμε τη νέα ιστοσελίδα του Ι.Κ.Α. </p>
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