<?php
  /*
    Template Name: Tentures et coussins
  */
?>

<?php get_header(); ?>
<div id="page_stores" class="pages">
  <div id="content">
    <div class="container_small">
    	<div class="intro_center">
	      <h1 class="fadein"><?php the_title(); ?></h1>
	    </div>
      <?php the_content(); ?>
    </div>

    <section class="box_cat">
      <div class="container">
        <div class="title fadein">
          <h2>Notre gamme</h2>
          <h3>Découvrez nos produits</h3>
        </div>

        <?php
        $loop = new WP_Query( array( 
          'post_type' => 'produits',
          'cat' => '8',
          'posts_per_page' => '100',
          'order' => 'ASC'
        ) );
        if ( $loop->have_posts() ) : ?>
        <div class="box_wrapper">
            <?php while ( $loop->have_posts() ) : $loop->the_post();?>

              <div class="col_quarter">
                <a href="<?php the_permalink(); ?>">
                  <div class="box_post">
                    <div class="post_img" <?php if (has_post_thumbnail()) { ?> style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')" <?php } else { ?> style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/couture.jpg')" <?php } ?> ></div>
                    <h4><?php the_title(); ?></h4>
                  </div>
                </a>
              </div>

            <?php endwhile; ?>
        </div>
        <?php endif;
        wp_reset_postdata();
        ?>

      </div>		  	
    </section>
  </div>

  <!-- FOOTER -->
  <?php get_footer(); ?>
</div>
