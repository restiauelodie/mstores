<!DOCTYPE html>
<html lang="fr-BE" class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title><?php echo get_bloginfo('name'); ?> <?php wp_title(' - '); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
      <nav>
        <div id="header_top">
          <div class="container">
            <div class="box_wrapper">
              <div class="logo">
                  <a href="<?php echo get_home_url(); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="M Stores - spécialiste du store et de la confection sur-mesure"/>
                  </a>
              </div>

              <div class="overlay" id="overlay">
                <div class="overlay-menu smooth">
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'nav_list' ) ); ?>
                </div>
              </div>

              <div class="mobile_only button_container" id="toggle">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
            </div>
          </div>
        </div>
      </nav>

