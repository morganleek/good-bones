<?php 

	// Theme setup
	function _themename_setup() {
    // default block styles
    add_theme_support( 'wp-block-styles' );

    // wide alignment
    add_theme_support( 'align-wide' );

    // disable custom font sizes
    add_theme_support( 'disable-custom-font-sizes' );

		// enable custom font sizes
    add_theme_support( 'editor-font-sizes', array(
      // array(
      //   'name' => esc_attr__( 'Small', 'themeLangDomain' ),
      //   'size' => 12,
      //   'slug' => 'small'
      // ),
    ) );

		// disable custom colours 
    add_theme_support( 'disable-custom-colors' );

		// custom colour palette
		add_theme_support( 'editor-color-palette',
			array(
				array(
				  'name'  => __( 'Grey', 'twentynineteen' ),
				  'slug'  => 'grey',
				  'color' => '#f1f2f2',
        ),
        array(
				  'name'  => __( 'Dark', 'twentynineteen' ),
				  'slug'  => 'dark',
				  'color' => '#646464',
				),
				array(
				  'name'  => __( 'Black', 'twentynineteen' ),
				  'slug'  => 'black',
				  'color' => '#000000',
        )
			)
		);

    // disable gradients 
    add_theme_support( 'disable-custom-gradients' );

    // remove patterns 
    remove_theme_support( 'core-block-patterns' );

    // custom spacing 
    add_theme_support( 'custom-spacing' );

    // editor styles
    add_theme_support( 'editor-styles' );

		// enqueue editor styles
		add_editor_style( 'dist/css/admin.css' );
	}
	
	add_action( 'after_setup_theme', '_themename_setup', 100 );

	// Hide some blocks
  function _themename_allowed_block_types( $allowed_blocks ) {  
    return array(
      // 'scm/block-list-post-type', // custom type
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
    );
  }

	add_filter( 'allowed_block_types', '_themename_allowed_block_types' );

	// Init
	// function _themename_init() {
	// }

	// add_action( 'init', '_themename_init' );
