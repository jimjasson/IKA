<?php

session_start();

$mysqli = new mysqli( "localhost", "root", "root", "sdi1400220" );



?>
<html>
<title>ΒΕΒΑΙΩΣΗ ΕΡΓΑΤΟΩΡΩΝ | ΙΚΑ</title>
<link rel="icon" href="/IKA/data/images/ika.jpg">


<head>

<link rel="stylesheet" type="text/css" href="/IKA/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/profile.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/cert_pens.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/print.css" media="print">


<?php
	if ( isset( $_SESSION[ 'logged_in' ] ) ) {
?>

  <?php
  $username = $_SESSION[ 'username' ];
  $sql = "SELECT * FROM accounts WHERE USERNAME='$username' ";
  $result = $mysqli->query( $sql );
  $rows = $result->fetch_assoc();
  $afm = $rows['AFM'];
  $sql = "SELECT *, DATE_FORMAT(PENS_DATE, '%d/%m/%Y') as MY_PENS_DATE FROM insurance_info WHERE AFM='$afm' ";
  $result = $mysqli->query( $sql );
  $rows2 = $result->fetch_assoc();

  if ( $rows2['INSUR_TYPE'] == 1) {
  ?>
  <div class="print">
    <h1 class="title">Επίσημη Βεβαίωση Απόδοσης Σύνταξης</h1>
    <p class="text">Βεβαιώνεται πως ο <?php echo $rows['NAME'], " ", $rows['SURNAME']; ?> είναι συνταξιούχος, από τις <?php echo $rows2['MY_PENS_DATE']; ?>!</p>
  </div>

  <a href="#" onclick="window.print();return false;">
   <button class="print_page"><span> Εκτύπωση </span></button>
  </a>
  <?php } else { ?>
  <div class="print">
    <h1>Πρέπει να είσαι συνταξιούχος για να λάβεις αυτή τη βεβαίωση!</h1>
  </div>

  <a href="/IKA/index.php" >
     <button class="print_page"><span> Αρχική Σελίδα </span></button>
  </a>
  <?php } ?>

<?php } else { ?>
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
    <div class="login_cont">
      <div class="login_alert">
        <!-- Logo -->
        <div class="alert_icon">
          <img src="/IKA/data/images/alert.png">
        </div>
        <div class="alert_text">
          Πρέπει να συνδεθείτε προκειμένου να δείτε αυτή τη σελίδα!<br>
        </div>
      </div>
      <div class="reg_log">
      <ul>
        <li>Καινούργιος χρήστης;<br><a href='/IKA/pages/register.php'><button class="register_page"> Εγγραφή </button></a></li>
        <li>Έχεις ήδη λογαριασμό;<br><a href='/IKA/pages/login.php'><button class="login_page"> Σύνδεση </button></a></li>
      </ul>
      </div>
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

<?php }  ?>


</html>
