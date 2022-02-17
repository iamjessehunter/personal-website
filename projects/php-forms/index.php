
<?php include('header.php'); ?>

<?php 
	// Main Page
	if ($page == "home") {
		include "modules/home.php";
	}
	// List of Forms
	if ($page == "hello") {
		include "modules/components/hello.php";
	}
	if ($page == "counting") {
		include "modules/components/counting.php";
	}
	if ($page == "quotes") {
		include "modules/components/quotes.php";
	}
	if ($page == "lib") {
		include "modules/components/lib.php";
	}
	if ($page == "math") {
		include "modules/components/math.php";
	}
	if ($page == "retirement") {
		include "modules/components/retirement.php";
	}
	if ($page == "area") {
		include "modules/components/area.php";
	}
	if ($page == "pizza") {
		include "modules/components/pizza.php";
	}
	if ($page == "paint") {
		include "modules/components/paint.php";
	}
?>

<?php include('footer.php'); ?>