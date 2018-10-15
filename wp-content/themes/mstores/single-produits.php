<?php
/*
  Single Post Template: Template for produits posts
  Description: Displaying produits content
*/
?>

<?php get_header(); ?>

<div id="single_produits" class="pages">
    <div id="content">
        <div class="post_banner" <?php if (has_post_thumbnail()) { ?> style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')" <?php } else { ?> style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/couture.jpg')" <?php } ?>>
            <div class="container"><h1><?php the_title(); ?></h1></div>
        </div>

        <div class="container">
            <ul id="breadcrumbs" class="breadcrumbs">
                <li>
                    <a href="<?php echo esc_url( get_permalink(8) ); ?>" title="Revenir sur la page d'accueil">
                        <i class="fas fa-home"></i> Accueil
                    </a>
                </li>
                <li class="separator"> &gt; </li>
                <li>
                    <?php if ( in_category(5) ) : ?>
                        <a href="<?php echo esc_url( get_permalink(15) ); ?>" title="Voir la catégorie <?php echo get_the_title(15); ?>"><?php echo get_the_title(15); ?></a>
                    <?php elseif ( in_category(6) ) : ?>
                        <a href="<?php echo esc_url( get_permalink(65) ); ?>" title="Voir la catégorie <?php echo get_the_title(65); ?>"><?php echo get_the_title(65); ?></a>
                    <?php elseif ( in_category(7) ) : ?>
                        <a href="<?php echo esc_url( get_permalink(17) ); ?>" title="Voir la catégorie <?php echo get_the_title(17); ?>"><?php echo get_the_title(17); ?></a>
                    <?php elseif ( in_category(8) ) : ?>
                        <a href="<?php echo esc_url( get_permalink(27) ); ?>" title="Voir la catégorie <?php echo get_the_title(27); ?>"><?php echo get_the_title(27); ?></a>
                    <?php else : ?>
                    <?php endif; ?>
                </li>
                <li class="separator"> &gt; </li>
                <li>
                    <span title="Produit: <?php the_title(); ?>"><?php the_title(); ?></span>
                </li>
            </ul>
        </div>

        <div class="container_small">
            <div class="intro_center">
            	<h2>Pourquoi choisir les <?php the_title(); ?> ?</h2>
            </div>
            <?php the_content(); ?>
        </div>

        <div class="container">
            <div class="product_desc">
                <h3><?= get_field('technicals_title'); ?></h3>
                <?= get_field('technicals_text'); ?>
            </div>

            <div class="product_desc">
                <h3><?= get_field('advantages_title'); ?></h3>
                <?= get_field('advantages_text'); ?>
            </div>

            <div class="btn_zone">
                <a href="<?php echo get_home_url(); ?>#contact" class="btn btn_blue">Nous contacter</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
