

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
	if ($page == "case-studies") {
		include "modules/case-studies-intro.php";
	}
	if ($page == "contact") {
		include "modules/contact.php";
	}
?>



<?php include('footer.php'); ?>
