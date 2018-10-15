<?php
  /*
    Template Name: Default
  */

  get_header();
?>
<div id="default_page">
  <div id="content">
    <div class="post_banner" <?php if (has_post_thumbnail()) { ?> style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')" <?php } else { ?> style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/banner_bobine2.png')" <?php } ?>>
    </div>
    <div class="container">
    	<div class="intro_center">
      		<h1 class="fadein"><?php the_title(); ?></h1>
      	</div>
      <?php the_content(); ?>
    </div>
  </div>
  <!-- FOOTER -->
  <?php get_footer(); ?>
</div>
