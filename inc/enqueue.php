<?php

	// front-end assets
	function _themename_assets() {
		$theme_version = wp_get_theme()->get( 'Version' );
		
		// front-end styles
		wp_enqueue_style( '_themename-stylesheet', get_stylesheet_directory_uri() . '/dist/css/bundle.css', array(), $theme_version, 'all' );
		// front-end scripts
		wp_enqueue_script( '_themename-scripts', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array('jquery'), $theme_version, true );
		// front-end js variables
		wp_localize_script('_themename-scripts', 'site',
			array(
				'url' => get_bloginfo('url'),
				'ajax' => admin_url( 'admin-ajax.php' ),
				'template_uri' => get_stylesheet_directory_uri(),
			)
		);
	}

	add_action('wp_enqueue_scripts','_themename_assets');

	// admin assets
	function _themename_admin_assets() {
		// editor style
		// add_editor_style( get_stylesheet_directory_uri() . '/dist/css/admin.css' );
	}

	add_action('admin_enqueue_scripts','_themename_admin_assets');

	// editor assets
	function _themename_enqueue_block_editor_assets() {
		// editor styles
		// wp_enqueue_style( '_themename-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/css/admin.css', array(), $theme_version, 'all' );
		// editor scripts
		wp_enqueue_script( '_themename-admin-scripts', get_stylesheet_directory_uri() . '/dist/js/admin.js', array(), $theme_version, true );
	}

	add_action('enqueue_block_editor_assets', '_themename_enqueue_block_editor_assets');