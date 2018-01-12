<?php

session_start();

$mysqli = new mysqli( "localhost", "root", "root", "IKA" );





?>
<html>
<title>ΠΡΟΦΙΛ | ΙΚΑ</title>
<link rel="icon" href="/IKA/data/images/ika.jpg">


<head>

<link rel="stylesheet" type="text/css" href="/IKA/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/IKA/assets/css/profile.css" media="screen" />



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
<!-- Profile  -->
  <div class="profile_cont">

    <?php
    $username = $_SESSION[ 'username' ];
    $sql = "SELECT * FROM accounts WHERE USERNAME='$username' ";

    $result = $mysqli->query( $sql );
    $rows = $result->fetch_assoc();
    ?>
    <p class ="name"> ΟΝΟΜΑΤΕΠΩΝΥΜΟ: <?php echo  $rows["NAME"], " ", $rows["SURNAME"]; ?> </p>
    <p class ="username"> ΟΝΟΜΑ ΧΡΗΣΤΗ: <?php echo $_SESSION[ 'username' ]; ?> </p>
    <p class ="birthdate"> ΗΜΕΡΟΜΗΝΙΑ ΓΕΝΝΗΣΗΣ:  </p>
    <p class ="afm"> Α.Φ.Μ.: <?php echo $rows["AFM"]; ?> </p>
    <p class="my_profile"> ΤΟ ΠΡΟΦΙΛ ΜΟΥ </p>
    <div class="buttons">
      <ul>
  		    <a href='/IKA/pages/profile.php' style="color:black"><li class="first">ΕΠΕΞΕΡΓΑΣΙΑ ΠΡΟΦΙΛ</li></a>
  		    <a href='/IKA/pages/profile_plirofories.php' style="color:black"><li class="second">ΠΛΗΡΟΦΟΡΙΕΣ ΑΣΦΑΛΙΣΗΣ</li></a>
  		    <a href='/IKA/pages/profile_bebaioseis.php' style="color:black"> <li class="third">ΒΕΒΑΙΩΣΕΙΣ</li> </a>
          <a href='/IKA/pages/profile_aithseis.php' style="color:black"> <li class="fourth">ΑΙΤΗΣΕΙΣ</li> </a>
  	  </ul>
    </div>
    <a href="/IKA/pages/logout.php">
			<p class="logout"> ΑΠΟΣΥΝΔΕΣΗ </p>
		</a>
    <div class="edit_cont">
			<h3 class="user_data">Στοιχεία Χρήστη: </h3>
			<p class ="cur_name">Όνομα: <?php echo $rows["NAME"]; ?> </p>
			<p class ="cur_surname">Επώνυμο: <?php echo $rows["SURNAME"]; ?> </p>
			<p class ="cur_father">Όνομα πατρός: <?php echo $rows["FATHER_NAME"]; ?> </p>
			<p class ="cur_mother">Όνομα μητρός: <?php echo $rows["MOTHER_NAME"]; ?> </p>
			<p class ="cur_afm">Α.Φ.Μ.: <?php echo $rows["AFM"]; ?> </p>
			<p class ="cur_email">E-mail: <?php echo $rows["EMAIL"]; ?> </p>
			<p class ="cur_username">Όνομα Χρήστη: <?php echo $rows["USERNAME"]; ?> </p>
			<h3 class="edit_data">Επεξεργασία Στοιχείων: </h3>
			<p class ="new_name">Νέο όνομα χρήστη:</p>
			<p class ="new_email">Νέο email:</p>
			<p class ="new_password">Νέο password:</p>
			<form class="form" action="/IKA/pages/under_construction.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="text"  class="change_input" value="<?php echo $rows['USERNAME']; ?>" name="username" required />
				<input type="email"  class="change_input" value="<?php echo $rows['EMAIL']; ?>" name="email" required />
				<input type="password"  class="change_input" placeholder="Νέο password"  id="password" name="password"  />
				<input type="password"  class="change_input" placeholder="Επιβεβαίωση" id="confirm_password" name="confirm_password"  />
				<input type="submit" class="change_input" value="Αλλαγή" name="register" />
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
