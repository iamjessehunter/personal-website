

<?php include('header.php'); ?>

<?php 
	if ($page == "home") {
		include "modules/home.php";
	}
	if ($page == "about") {
		include "modules/about.php";
	}
	if ($page == "projects") {
		include "modules/projects-intro.php";
	}
	if ($page == "experiments") {
		include "modules/templates/experiments-intro.php";
	}
?>

<?php include('footer.php'); ?>
