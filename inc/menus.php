<?php 
	// register menus
	function _themename_register_menu() {
    register_nav_menus(
      array( 
        'header' => __('Header Menu', '_themename'),
        'footer' => __('Footer Menu', '_themename'),
        // 'sidebar' => __('Sidebar Menu', '_themename'),
        // 'contact' => __('Contact Menu', '_themename')
      )
    );
  }

  add_action( 'init', '_themename_register_menu' );

	// menu with args
	function _themename_nav($args = array()) {
    $defaults = array(
      'theme_location'  => 'header-menu',
      'menu'            => '',
      'container'       => false,
      'container_class' => 'menu-container',
      'container_id'    => '',
      'menu_class'      => 'menu',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '<span class="mobile-only expander"></span>',
      'items_wrap'      => '<ul>%3$s</ul>',
      'depth'           => 2,
      'walker'          => ''
    );

    // merge args
    $_args = wp_parse_args($args, $defaults);

    // generate menu
    if($_args['echo'] === false) {
      return wp_nav_menu($_args);
    }
    wp_nav_menu($_args);
  }
