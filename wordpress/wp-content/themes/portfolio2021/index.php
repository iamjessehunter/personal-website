
<?php get_header(); ?>

<?php 
	if ( is_page("home") ) {
		echo "<h1>Home</h1>";
	}

	if ( is_page("list") ) {
		$args = array(  
	  		'post_type' => 'projects',
		);

		$loop = new WP_Query( $args ); 
	  
		while ( $loop->have_posts() ) : $loop->the_post(); 
	 		include("templates/components/project-card.php");
		endwhile;

		wp_reset_postdata(); 
	}

	if ( is_singular("projects") ) {
		echo "<h2>" . the_field("name") . "</h2>";
	}

?>

<?php get_footer(); ?>