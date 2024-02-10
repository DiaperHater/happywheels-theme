<?php get_header() ?>

<?php

$row_layout = get_row_layout();
?>

<?php if (have_rows('content')) : ?>
  <?php while (have_rows('content')) : the_row(); ?>
    <?php if (get_row_layout() == 'hero') : ?>
      <?php get_template_part('template-parts/content/section', 'hero') ?>    
    <?php elseif (get_row_layout() == 'about') : ?>
      <?php get_template_part('template-parts/content/section', 'about') ?>    
    <?php elseif (get_row_layout() == 'cta') : ?>
      <?php get_template_part('template-parts/content/section', 'cta') ?>    
    <?php elseif (get_row_layout() == 'levels') : ?>
      <?php get_template_part('template-parts/content/section', 'levels') ?>    
    <?php elseif (get_row_layout() == 'prices') : ?>
      <?php get_template_part('template-parts/content/section', 'prices') ?>    
    <?php elseif (get_row_layout() == 'media_cta') : ?>
      <?php get_template_part('template-parts/content/section', 'media-cta') ?>    
    <?php elseif (get_row_layout() == 'testimonials') : ?>
      <?php get_template_part('template-parts/content/section', 'testimonials') ?>    
    <?php elseif (get_row_layout() == 'reasons') : ?>
      <?php get_template_part('template-parts/content/section', 'reasons') ?>    
    <?php elseif (get_row_layout() == 'coach') : ?>
      <?php get_template_part('template-parts/content/section', 'coach') ?>    
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>




<?php get_footer() ?>