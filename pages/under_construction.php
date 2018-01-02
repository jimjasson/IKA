<?php

session_start();

if ( isset( $_SESSION['url'] ) ) {
	$url = $_SESSION['url'];
} else {
	$url = "/IKA/index.php";
}
?>
<head>
<title>ΥΠΟ ΚΑΤΑΣΚΕΥΗ | ΙΚΑ</title>

	<link href="/IKA/assets/css/under_construction.css" rel="stylesheet">

</head>

<body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>IKA</h1>
					<h2 class="subtitle">Η ιστοσελίδα βρίσκεται υπό κατασκευή. Σύντομα κοντά σας!</h2>
					<h2 class="subtitle"> Μέχρι τότε... </h2>
					 <a href= <?php echo $url ?> >
						<button class="previous_page"><span> Προηγούμενη Σελίδα </span></button>
					</a>
					<a href="/IKA/index.php">
						<button class="home_page"><span> Αρχική Σελίδα </span></button>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
