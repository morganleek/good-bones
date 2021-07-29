<?php 

	// Theme setup
	function _themename_setup() {
    // default block styles
    add_theme_support( 'wp-block-styles' );

    // wide alignment
    add_theme_support( 'align-wide' );

    // post thumbnails
    add_theme_support( 'post-thumbnails', array( 'post' ) );

    // border
    add_theme_support( 'disable-border-settings' );

    // remove patterns 
    remove_theme_support( 'core-block-patterns' );

    // custom spacing 
    // add_theme_support( 'custom-spacing' );

    // editor styles
    add_theme_support( 'editor-styles' );

		// enqueue editor styles
		add_editor_style( 'dist/css/admin.css' );
    // add inline style for :root font-size for rem values
    wp_add_inline_style( 'wp-block-library', ':root { font-size:10px; }' );
	}
	
	add_action( 'after_setup_theme', '_themename_setup', 100 );

	// Hide some blocks
  function _themename_allowed_block_types( $allowed_blocks ) {  
    return array(
      // 'scm/block-list-post-type', // custom type
      'core/block',
      'core/paragraph',
      'core/image',
      'core/heading',
      'core/gallery',
      'core/list',
      'core/quote',
      'core/pullquote',
      'core/audio',
      'core/file',
      'core/group',
      'core/separator',
      'core/buttons',
      'core/columns',
      'core/media-text',
      'core/spacer',
      'core/cover',
      'core/shortcode'
      // 'formidable/simple-form',
      // 'acf/navigation',
      // 'good-bones/block-testimonial',
      // 'good-bones/block-testimonials',
      // 'good-bones/block-gb-maps'
    );
  }

	// add_filter( 'allowed_block_types', '_themename_allowed_block_types' );

  // Block Styles
  function _themename_register_block_styles() {
    // Add styles

    // Cover
    // register_block_style( 'core/cover', [
    //   'name' => 'banner-reversed',
    //   'label' => __( 'Reversed', '_themename' ),
    // ] );

    // Columns
    // register_block_style( 'core/columns', [
    //   'name' => 'no-bottom-margin',
    //   'label' => __( 'No bottom margin', '_themename' ),
    // ] );
    // register_block_style( 'core/columns', [
    //   'name' => 'columns-border',
    //   'label' => __( 'Columns border', '_themename' ),
    // ] );

    // Gallery
    // register_block_style( 'core/gallery', [
    //   'name' => 'gallery-slider',
    //   'label' => __( 'Gallery Slider', '_themename' ),
    // ] );

    // Buttons
    // register_block_style( 'core/button', [
    //   'name' => 'play',
    //   'label' => __( 'Play', '_themename' ),
    // ] );

  }

  add_action( 'init', '_themename_register_block_styles', 100 );

	// Init
	// function _themename_init() {
	// }

	// add_action( 'init', '_themename_init' );
