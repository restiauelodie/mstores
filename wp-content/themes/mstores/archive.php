<?php
/**
 * Template Name: Blog
*/

  get_header();
?>
<?php var_dump($_GET); ?>
<div id="news_page" class="padding_mobile">
  <div class="container">
    <div class="box_wrapper">
      <div class="two_third_columns">
        <div class="box_wrapper">
          <?php while (have_posts()) : the_post(); ?>
            <div class="two_columns">
              <div class="gap">
                <?php if (has_post_thumbnail()) { ?>
                  <div class="box_img_background" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                <?php } ?>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Read more</a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="three_columns">
        <div id="sidebar">

          <ul><?php get_sidebar( 'main_sidebar'); ?></ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
