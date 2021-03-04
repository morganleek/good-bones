<?php 
	if( !function_exists( '___' ) ) {
    function ___( $object, $return = false ) {
      $pre = '<pre>' . print_r( $object, true ) . '</pre>';
      if( $return ) {
        return $pre;
      }
      print $pre;
    }
  }

  function _themename_the_html_classes() {
    $classes = apply_filters( '_themename_html_classes', '' );
    if ( !$classes ) {
      return;
    }
    echo 'class="' . esc_attr( $classes ) . '"';
  }