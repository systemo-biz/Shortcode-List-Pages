<?php
/*
Plugin Name: Shortcode List Pages
Description: Shortcode [list_pages_s post_type='page' child_of="33" depth="3" title_li=""]
Plugin URI: https://github.com/systemo-biz/shortcode-list-pages
Author: Systemo.biz
Author URI: http://systemo.biz
Version: 0.2
*/

add_shortcode( 'list_pages_s', function($atts){

  $post = get_post();

  extract( shortcode_atts( array(
  		'post_type' => 'page',
  		'child_of' => $post->ID,
      'depth'     => 3,
      'title_li'  => '',
  	), $atts));


  $args = array(
  	'depth'        => $depth
  	,'child_of'     => $child_of
  	,'title_li'     => $title_li
  	,'echo'         => 0
  	,'authors'      => ''
  	,'sort_column'  => 'menu_order, post_title'
  	,'sort_order'  => 'ASC'
  	,'link_before'  => ''
  	,'link_after'   => ''
  	,'meta_key'   => ''
  	,'meta_value'   => ''
  	,'number'   => ''
  	,'offset'   => ''
  	,'walker'   => ''
    ,'post_type'=> $post_type
  );

  return wp_list_pages( $args );
});
