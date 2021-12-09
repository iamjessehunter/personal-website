<!doctype html>

<?php 
	/* router */
	$page = null;
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"]; // url?page=string
	} else {
		$page = "home"; // default page
	}
?>

<html lang='en'>
	<?php include('head.php'); ?>

	<body>
		<header class='site-header'>
		<inner-column>

			<?php include('modules/masthead.php'); ?>

		</inner-column>
		</header>


		<main class='page-content'>
			<!-- STUFF -->
			
			