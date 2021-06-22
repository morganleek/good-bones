<?php	
	get_header();

	if ( have_posts() ) {
	
		// Load posts loop.
		while ( have_posts() ) {
			the_post();
	
			if( is_archive() ) {
				get_template_part( 'template-parts/content/content-archive', get_post_type() );	
			}
			else {
				get_template_part( 'template-parts/content/content', get_post_type() );
			}
		}
		
	} else {
	
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content/content-none' );
	
	}
	
	get_footer();