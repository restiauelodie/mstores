<?php get_header(); ?>
<div id="default_page">
  <div id="content">
    <div class="post_banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/default.png')">
    </div>
    <div class="container">
    	<div class="intro_center">
      		<h1 class="fadein">Page 404</h1>
      		<h2>Oups, la page que vous cherchez n'existe pas!</h2>

      		<a href="<?php echo get_home_url(); ?>" class="btn btn_pink appear_bottom_solo">Retour sur la page d'accueil</a>
      	</div>
    </div>
  </div>
  <!-- FOOTER -->
  <?php get_footer(); ?>
</div>
