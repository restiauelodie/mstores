<?php
  /**
    * Plugin Name: elosylevent Custom admin
    * Plugin URI: http://elodie-restiau.be/
    * Description: This plugin sets custom administration for elosylevent website.
    * Version: 1.0.0
    * Author: elodie restiau
    * Author URI: http://elodie-restiau.be/
    * License: GPL2
  */

  /*
   * Remove WP logo from admin
   */
  add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
  function remove_wp_logo( $wp_admin_bar ) {
      $wp_admin_bar->remove_node( 'wp-logo' );
  }

  /*
   * Hide version number in admin footer
   */
  add_filter( 'update_footer', create_function('', 'return;'), 999);

  /*
   * Change footer text in admin
   */
  add_filter('admin_footer_text', 'remove_footer_admin');
  function remove_footer_admin () {
    echo '';
  }

  /*
   * Include CSS.
   */
  add_action( 'login_head', 'fia_custom_admin_css' );
  function fia_custom_admin_css() {
      wp_register_style( 'custom_admin',  plugin_dir_url( __FILE__ ) . 'custom-login-styles.css' );
      wp_enqueue_style( 'custom_admin' );
  }

  /*
   * Custom logo for login screen.
   */
  add_filter( 'login_headerurl', 'my_login_logo_url' );
  function my_login_logo_url() {
    return get_bloginfo( 'url' );
  }

  /*
   * Custom tagline for login screen
   */
  add_filter( 'login_headertitle', 'my_login_logo_url_title' );
  function my_login_logo_url_title() {
      return 'elosylevent';
  }

?>