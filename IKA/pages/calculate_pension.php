<?php
// The form has been submitted with post method
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {

	$hours              = $_POST[ 'hours' ];
	$salary1            = $_POST[ 'salary1' ];
	$salary2            = $_POST[ 'salary2' ];
	$salary3            = $_POST[ 'salary3' ];
	$salary4            = $_POST[ 'salary4' ];
	$salary5            = $_POST[ 'salary5' ];
	$pension_type       = $_POST[ 'radio' ];

?>
 <?php
	$pension = 0;
	if ( "age_pension" === $pension_type ) {

		$mean_salary = ( $salary1 + $salary2 + $salary3 + $salary4 + $salary5 ) / 5;
		$per_month   = $mean_salary/12;

		if ( $per_month >= 500 && $per_month < 1000 ){
			$pension = ( 90 * $per_month ) / 100;
		} elseif ( $per_month >= 1000 && $per_month < 2000 ) {
			$pension = ( 80 * $per_month ) / 100;
		} elseif ( $per_month >= 2000 ) {
			$pension = ( 70 * $per_month ) / 100;
		} 		
	} elseif ( "disability_pension" === $pension_type ) {
		$mean_salary = ( $salary1 + $salary2 + $salary3 + $salary4 + $salary5 ) / 5;
		$per_month   = $mean_salary/12;

		if ( $per_month >= 500 && $per_month < 1000 ){
			$pension = ( 80 * $per_month ) / 100;
		} elseif ( $per_month >= 1000 && $per_month < 2000 ) {
			$pension = ( 75 * $per_month ) / 100;
		} elseif ( $per_month >= 2000 ) {
			$pension = ( 65 * $per_month ) / 100;
		} 		
	} elseif ( "death_insured" === $pension_type ) {
		$mean_salary = ( $salary1 + $salary2 + $salary3 + $salary4 + $salary5 ) / 5;
		$per_month   = $mean_salary/12;

		if ( $per_month >= 500 && $per_month < 1000 ){
			$pension = ( 75 * $per_month ) / 100;
		} elseif ( $per_month >= 1000 && $per_month < 2000 ) {
			$pension = ( 60 * $per_month ) / 100;
		} elseif ( $per_month >= 2000 ) {
			$pension = ( 50 * $per_month ) / 100;
		} 		
	} elseif ( "death_insured" === $pension_type ) {
		$mean_salary = ( $salary1 + $salary2 + $salary3 + $salary4 + $salary5 ) / 5;
		$per_month   = $mean_salary/12;

		if ( $per_month >= 500 && $per_month < 1000 ){
			$pension = ( 75 * $per_month ) / 100;
		} elseif ( $per_month >= 1000 && $per_month < 2000 ) {
			$pension = ( 60 * $per_month ) / 100;
		} elseif ( $per_month >= 2000 ) {
			$pension = ( 50 * $per_month ) / 100;
		} 
	}

	$pension = $pension + ( $hours/1000 );
	$_SESSION[ 'pension' ] = round( $pension, 2 );
}

?>

<script type="text/javascript">
 <?php
	$redirect = true;
	if ( $hours < 5550 ) {
		$redirect = false;
 ?>
 window.alert( "Πρέπει να έχετε εργαστεί τουλάχιστον 5550 εργατοώρες προκειμένου να δικαιούστε σύνταξη!" );
 <?php
	}
 ?>

 <?php
	if ( $hours > 12000 ) {
		$redirect = false;
 ?>
 window.alert( "Παρακαλούμε εισάγετε έγκυρη τιμή στο πεδίο 'Εργατοώρες' (μικρότερη των 12.000)." );
 <?php
	}
 ?>

 <?php
	if ( $salary1 < 6000 || $salary2 < 6000 || $salary3 < 6000 || $salary4 < 6000 || $salary5 < 6000  ) {
		$redirect = false;
 ?>
 window.alert( "Πρέπει να έχετε ετήσιες αμοιβές μεγαλύτερες από 6.000 ευρώ (500 ευρώ/μήνα) τα τελευταία 5 χρόνια προκειμένου να δικαιούστε σύνταξη!" );
 <?php
	}
 ?>

<?php
	if ( $redirect === true ) {
 ?>
 window.location = '/IKA/pages/pensioners_calculation_results.php';
 <?php
	} else {
 ?>
 window.location = '/IKA/pages/pensioners_calculation.php';
 <?php
	}
 ?>

</script>