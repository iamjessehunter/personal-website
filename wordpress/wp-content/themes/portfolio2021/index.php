
<?php get_header(); ?>

<?php 
	if ( is_page("home") ) {
		include ('templates/components/home.php');
	}

	if ( is_page("list") ) {
		echo "list";
	}

?>

<?php get_footer(); ?>