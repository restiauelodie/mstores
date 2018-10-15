<?php
  /*
    Template Name: Home
  */
?>

<?php get_header(); ?>
<div id="home">
  <div id="content">
    <section id="banner" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <div class="container">
        <h1><?= get_field('header_title'); ?></h1>
        <a href="#contact" class="btn btn_blue"><?= get_field('header_button'); ?></a>
      </div>
    </section>

    <section id="services">
      <div >
        <div class="container_big">
          <div class="box_wrapper box_padding">
            <div class="col_third">
              <h3 class="stores" style="background-image:url(<?= get_field('cat_stores_am_img'); ?>);"><?php echo get_the_title(15); ?></h3>
              <p><?= get_field('cat_intro_stores_am'); ?></p>
              <div class="btn_zone">
                <a href="<?php echo esc_url( get_permalink(15) ); ?>" class="btn btn_blue"><?= get_field('stores_americains_bouton'); ?></a>
              </div>
            </div>
            <div class="col_third">
              <h3 class="stores_tech" style="background-image:url(<?= get_field('cat_stores_tech_img'); ?>);"><?php echo get_the_title(65); ?></h3>
              <p><?= get_field('cat_intro_stores_tech'); ?></p>
              <div class="btn_zone">
                <a href="<?php echo esc_url( get_permalink(65) ); ?>" class="btn btn_blue"><?= get_field('stores_techniques_bouton'); ?></a>
              </div>
            </div>
            <div class="col_third">
              <h3 class="parois" style="background-image:url(<?= get_field('cat_parois_img'); ?>);"><?php echo get_the_title(17); ?></h3>
              <p><?= get_field('cat_intro_parois'); ?></p>
              <div class="btn_zone">
                <a href="<?php echo esc_url( get_permalink(17) ); ?>" class="btn btn_blue"><?= get_field('parois_japonaises_bouton'); ?></a>
              </div>
            </div>
            <div class="col_third">
              <h3 class="tentures" style="background-image:url(<?= get_field('cat_tentures_img'); ?>);"><?php echo get_the_title(27); ?></h3>
              <p><?= get_field('cat_intro_tentures'); ?></p>
              <div class="btn_zone">
                <a href="<?php echo esc_url( get_permalink(27) ); ?>" class="btn btn_blue"><?= get_field('tentures_bouton'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="story">
      <div>
          <div class="box_wrapper">
            <div class="col_demi padding_content">
              <div class="title fadein">
                <h2><?= get_field('about_title'); ?></h2>
                <h3><?= get_field('about_subtitle'); ?></h3>
              </div>
              <?= get_field('about_text'); ?>
            </div>
            <div class="col_demi">
            </div>
          </div>
      </div>
    </section>

    <section id="slider">
      <div class="title fadein">
        <h2><?= get_field('products_title'); ?></h2>
        <h3><?= get_field('products_subtitle'); ?></h3>
      </div>
      <div class="slider_center">
        <?php
            $loop = new WP_Query( array( 'post_type' => 'produits') );
            if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                  <div class="slide" <?php if (has_post_thumbnail()) { ?> style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')" <?php } else { ?> style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/aiguille.jpg')" <?php } ?>>
                    <a href="<?php the_permalink(); ?>">
                      <h4><?php the_title(); ?></h4>
                    </a>
                  </div>
                <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
      </div>
    </section>

    <section id="promesse">
      <div class="title fadein">
        <h2><?= get_field('rassurant_title'); ?></h2>
        <h3><?= get_field('rassurant_subtitle'); ?></h3>
      </div>
      <div class="box_rassurants">
        <div class="container">
          <?php
          if (have_rows('rassurants')): ?>
            <div class="box_wrapper box_padding">
              <?php while (have_rows('rassurants')) : the_row();
                $rassurantImg        = get_sub_field('rassurant_img');
                $rassurantTitle     = get_sub_field('rassurant_name');
              ?>

              <div class="col_quarter">
                <div class="icons"><img src="<?= $rassurantImg ?>" alt="M. Stores vous garantie : <?= $rassurantTitle ?>"/></div>
                <h3><?= $rassurantTitle ?></h3>
              </div>

              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section id="location">
      <div class="container">
        <div id="map"></div>
      </div>
      <div class="container_small">
        <div class="box_location">
          <div class="title fadein">
            <h2><?= get_field('location_title'); ?></h2>
            <h3><?= get_field('location_subtitle'); ?></h3>
          </div>
          
          <div class="box_wrapper">
            <div class="col_demi">
              <p><b><i class="fas fa-map-marker-alt"></i>Adresse</b><?= get_field('location_address'); ?></p>
              <p><b><i class="fas fa-phone"></i>Tel</b><?= get_field('location_phone'); ?></p>
            </div>
            <div class="col_demi">
              <p><b><i class="fas fa-mobile-alt"></i>GSM</b><?= get_field('location_mobile'); ?></p>
              <p><b><i class="fas fa-at"></i>E-mail</b><?= get_field('location_email'); ?></p>
              <p><b><i class="fas fa-pencil-alt"></i>TVA</b><?= get_field('location_tva'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact"> 
      <div class="title fadein">
        <h2><?= get_field('contact_title'); ?></h2>
        <h3><?= get_field('contact_subtitle'); ?></h3>
      </div>
      <div class="container"><?php the_content(); ?></div>
    </section>

    <section class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/couture.jpg);">
    </section>

  </div>
  <!-- FOOTER -->
  <?php get_footer(); ?>
