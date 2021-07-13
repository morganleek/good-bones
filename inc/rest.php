<?php
	// https://wor.gonzo/wp-json/_themename/v1/routes?url=/page-name

	function _themename_routes( $request ) {
		global $wp;
		global $wp_query;

		$url = $request->get_param( 'url' );
		$_SERVER['REQUEST_URI'] = $url;
		
		$wp->parse_request();
		$wp->query_posts();

		$post = array(
			'is_404' => $wp_query->is_404(),
			'is_archive' => $wp_query->is_archive(),
			'is_attachment' => $wp_query->is_attachment(),
			'is_author' => $wp_query->is_author(),
			'is_category' => $wp_query->is_category(),
			'is_comment_feed' => $wp_query->is_comment_feed(),
			'is_comments_popup' => $wp_query->is_comments_popup(),
			'is_date' => $wp_query->is_date(),
			'is_day' => $wp_query->is_day(),
			'is_embed' => $wp_query->is_embed(),
			'is_favicon' => $wp_query->is_favicon(),
			'is_feed' => $wp_query->is_feed(),
			'is_front_page' => $wp_query->is_front_page(),
			'is_home' => $wp_query->is_home(),
			'is_main_query' => $wp_query->is_main_query(),
			'is_month' => $wp_query->is_month(),
			'is_page' => $wp_query->is_page(),
			'is_paged' => $wp_query->is_paged(),
			'is_post_type_archive' => $wp_query->is_post_type_archive(),
			'is_preview' => $wp_query->is_preview(),
			'is_privacy_policy' => $wp_query->is_privacy_policy(),
			'is_robots' => $wp_query->is_robots(),
			'is_search' => $wp_query->is_search(),
			'is_single' => $wp_query->is_single(),
			'is_singular' => $wp_query->is_singular(),
			'is_tag' => $wp_query->is_tag(),
			'is_tax' => $wp_query->is_tax(),
			'is_time' => $wp_query->is_time(),
			'is_trackback' => $wp_query->is_trackback(),
			'is_year' => $wp_query->is_year()
		);
		
		if( $wp_query->have_posts() ) {
			$wp_query->the_post();
	
			ob_start(); // Buffer
			
			the_content(); // Content
			
			$post['id'] = get_the_ID();
			$post['content'] = ob_get_clean(); // Get buffer
		}
		wp_reset_postdata();

		return json_encode( $post ) ;
	}
	
	add_action( 'rest_api_init', function () {
		register_rest_route( '_themename/v1', '/routes', array(
			'methods' => 'POST',
			'callback' => '_themename_routes',
		) );
	} );