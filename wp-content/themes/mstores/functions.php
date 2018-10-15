<?php
    /*
     * Add support for :
     * - Posts cover images
     * - Title tag
    */
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_filter('sanitize_file_name', 'remove_accents' );

    /*
     * Add styles to header
     * - Theme styles (style.css)
    */
    add_action('wp_enqueue_scripts', 'insert_css', 1);
    function insert_css() {
        
        wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Lato:400,700,900', false, 'screen');
        wp_enqueue_style('fonts');

        wp_register_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css', array(), '5.0.10');
        wp_enqueue_style('fontAwesome');

        wp_register_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', '1.9.0', false, 'screen');
        wp_enqueue_style('slick');

        wp_register_style('slicktheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', '1.9.0', false, 'screen');
        wp_enqueue_style('slicktheme');

        wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', '', false, 'screen');
        wp_enqueue_style('animate');

        wp_register_style('style', get_template_directory_uri() . '/css/app.min.css');
        wp_enqueue_style('style');

    }

    /*
     * Add scripts to footer
     * - JQuery 3.1.1
     * - Theme scripts (app.min.js)
    */
    add_action('wp_enqueue_scripts', 'insert_js', 2);
    function insert_js () {
        if (!is_admin()) :
            wp_deregister_script('jquery');

            wp_register_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', false, '2.2.4', true);
            wp_enqueue_script('jquery');

            wp_register_script('migrate', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', false, '2.2.4', true);
            wp_enqueue_script('migrate');

            wp_register_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js', false, '1.9.0', true);
            wp_enqueue_script('slick');

            wp_register_script('main', get_template_directory_uri() . '/js/app.min.js', array('jquery'), true);
            wp_enqueue_script('main');
        endif;
    }

    /*
     * Registering menus
    */
    function register_menus() {
        register_nav_menu('header-menu', __('Header menu'));
        register_nav_menu('mobile-menu', __('Mobile menu'));
        register_nav_menu('footer-menu', __('Footer menu'));
        register_nav_menu('footer-submenu', __('Footer submenu'));
    }
    add_action( 'init', 'register_menus' );

    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

    function special_nav_class ($classes, $item) {
        if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        return $classes;
    }

    /*
     * Registering Sidebars
    */
    function register_custom_sidebars() {
        $args = array(
            'name'          => __( 'Sidebar' ),
            'id'            => 'main_sidebar',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle"><span>',
            'after_title'   => '</span></h2>'
        );

        register_sidebar( $args );
    }
    add_action( 'init', 'register_custom_sidebars' );
