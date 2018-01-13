<?php

session_start();

<<<<<<< HEAD
$mysqli = new mysqli( "localhost", "root", "root", "sdi1400220" );

?>

=======
$mysqli = new mysqli( "localhost", "root", "root", "IKA" );


$_SESSION['url'] = $_SERVER['REQUEST_URI'];


?>
>>>>>>> master
<html>
<title>ΠΡΟΦΙΛ - ΑΙΤΗΣΕΙΣ | ΙΚΑ</title>
<link rel="icon" href="/IKA/data/images/ika.jpg">


<head>

<link rel="stylesheet" type="text/css" href="/IKA/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/profile_applications.css" media="screen" />



<!-- Logo -->
<div class="logo">
	<a href="/IKA/index.php">
		 <img src="/IKA/data/images/ika.jpg">
	</a>
</div>

<<<<<<< HEAD
<div class="top_contact">
	<p class="title"> Κάλεσέ μας! </p>
	<img src="/IKA/data/images/phone.png">
	<p class="number"> 2101234567 </p>
</div>

<div class="store">
	<p class="title"> Βρες μας σ' ένα <a href="/IKA/pages/under_construction.php"> κατάστημα</a>! </p>
	<img src="/IKA/data/images/office.png">
</div>

=======
>>>>>>> master
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
		 <li class="active"><a href='/IKA/index.php'><span>ΑΡΧΙΚΗ ΣΕΛΙΔΑ</span></a></li>
<<<<<<< HEAD
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
=======
		 <li><a href='#'><span>ΑΣΦΑΛΙΣΜΕΝΟΙ</span></a></li>
		 <li class='last'><a href='/IKA/pages/pensioners.php'><span>ΣΥΝΤΑΞΙΟΥΧΟΙ</span></a></li>
		 <li>
			<form action="#" method="get"> </li>
			<input type="text" name="search"  class="search_field" placeholder="Αναζήτηση...">
				<button class="search_button" type="submit" style="cursor:pointer;"> Πάμε! </button>
		 </form>
>>>>>>> master
	</ul>
</div>

<div class="home_menu_wrapper">
<!-- Profile  -->
<?php
	if ( isset( $_SESSION[ 'logged_in' ] ) ) {
?>
  <div class="profile_cont">

    <?php
    $username = $_SESSION[ 'username' ];
    $sql = "SELECT * FROM accounts WHERE USERNAME='$username' ";
    $result = $mysqli->query( $sql );
    $rows = $result->fetch_assoc();
		$afm = $rows['AFM'];
		$sql = "SELECT *, DATE_FORMAT(BIRTH_DATE, '%d/%m/%Y') as MY_BIRTH_DATE FROM insurance_info WHERE AFM='$afm' ";
		$result = $mysqli->query( $sql );
		$rows2 = $result->fetch_assoc();
    ?>
    <p class ="name"> ΟΝΟΜΑΤΕΠΩΝΥΜΟ: <?php echo  $rows["NAME"], " ", $rows["SURNAME"]; ?> </p>
    <p class ="username"> ΟΝΟΜΑ ΧΡΗΣΤΗ: <?php echo $_SESSION[ 'username' ]; ?> </p>
    <p class ="birthdate"> ΗΜΕΡΟΜΗΝΙΑ ΓΕΝΝΗΣΗΣ: <?php echo $rows2['MY_BIRTH_DATE']; ?> </p>
    <p class ="afm"> Α.Φ.Μ.: <?php echo $rows["AFM"]; ?> </p>
    <p class="my_profile"> ΤΟ ΠΡΟΦΙΛ ΜΟΥ </p>
    <div class="buttons">
      <ul>
  		    <a href='/IKA/pages/profile.php' style="color:black"><li class="first">ΕΠΕΞΕΡΓΑΣΙΑ ΠΡΟΦΙΛ</li></a>
  		    <a href='/IKA/pages/profile_info.php' style="color:black"><li class="second">ΠΛΗΡΟΦΟΡΙΕΣ ΑΣΦΑΛΙΣΗΣ</li></a>
  		    <a href='/IKA/pages/profile_certificates.php' style="color:black"> <li class="third">ΒΕΒΑΙΩΣΕΙΣ</li> </a>
          <a href='/IKA/pages/profile_applications.php' style="color:black"> <li class="fourth">ΑΙΤΗΣΕΙΣ</li> </a>
  	  </ul>
    </div>
    <a href="/IKA/pages/logout.php">
			<p class="logout"> ΑΠΟΣΥΝΔΕΣΗ </p>
		</a>

		<div class="edit_cont">
<<<<<<< HEAD

		</div>
=======
			<h2 class="app_title">Διαθέσιμες Αιτήσεις:</h2>
			<a href="/IKA/pages/profile_applications_cld.php" class="app_child"> Αίτηση ασφάλισης τέκνων </a>
			<?php if ( $rows2['INSUR_TYPE'] == 0 )  {?>	<!-- Ασφαλισμένος -->
			<a href="/IKA/pages/profile_applications_pens.php" class="app_pens"> Αίτηση συνταξιοδότησης </a>
			<?php } ?>


		</div>

>>>>>>> master
<?php } else { ?>
		<div class="login_cont">
			<div class="login_alert">
				<!-- Logo -->
				<div class="alert_icon">
					<img src="/IKA/data/images/alert.png">
				</div>
				<div class="alert_text">
					Πρέπει να συνδεθείτε προκειμένου να δείτε το προφίλ σας!<br>
				</div>
			</div>
			<div class="reg_log">
			<ul>
				<li>Καινούργιος χρήστης;<br><a href='/IKA/pages/register.php'><button class="register_page"> Εγγραφή </button></a></li>
				<li>Έχεις ήδη λογαριασμό;<br><a href='/IKA/pages/login.php'><button class="login_page"> Σύνδεση </button></a></li>
			</ul>
			</div>
		</div>
<?php }  ?>

  </div>


<<<<<<< HEAD








<!-- Footer --> 
=======
<!-- Footer -->
>>>>>>> master

	<div class="footer">
		<div class="contact">
			<p class="title"> Επικοινωνία </p>
			<img src="/IKA/data/images/phone.png">
			<p class="number"> 2101234567 </p>
		</div>
		<div class="schedule">
			<p class="title"> Ωράριο Καταστημάτων </p>
			<img src="/IKA/data/images/office.png">
<<<<<<< HEAD
			<p class="time"> Δευτέρα - Παρασκευή <br> 09:00 - 14:00</p>
=======
			<p class="time"> Δευτέρα - Παρασκευή 09:00 - 14:00</p>
		</div>
		<div class="sitemap">
			<p class="title"> Sitemap </p>
>>>>>>> master
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

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> master
