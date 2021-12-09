<?php get_header(); ?>

<?php 
	if ( is_page("home") ) {
		echo "<h1>Home</h1>";
	}

	if ( is_page("list") ) {
		$args = array(  
	      'post_type' => 'bike',
	    );

	    $loop = new WP_Query( $args ); 
	        
	    while ( $loop->have_posts() ) : $loop->the_post(); 
	      include ("templates/components/ultra-card.php");
	    endwhile;

	    wp_reset_postdata(); 
	}
?>

<?php get_footer(); ?>