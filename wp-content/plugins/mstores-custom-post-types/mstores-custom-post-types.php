<?php
  /**
      * Plugin Name: mstores Custom post types
      * Plugin URI: http://elodie-restiau.be/
      * Description: This plugin adds custom post types to mstores.
      * Version: 1.0.0
      * Author: elodie restiau
      * Author URI: http://elodie-restiau.be/
      * License: GPL2
    */

  add_action( 'init', 'create_post_types' );
  function create_post_types() {

    register_post_type( 'produits',
      array(
        'labels' => array(
          'name' => 'Produits',
          'singular_name' => 'produits'
        ),
        'supports'=> array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'public' => true,
        'menu_icon'   => 'dashicons-star-filled',
        'menu_position' => 5,
        'capability_type'    => 'post',
        'rewrite' => array('slug' => 'produits'),
        'taxonomies'          => array( 'category', 'post_tag' ),
      )
    );
  }
?>