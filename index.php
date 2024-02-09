<?php get_header() ?>

<?php

$row_layout = get_row_layout();
?>

<?php if (have_rows('content')) : ?>
  <?php while (have_rows('content')) : the_row(); ?>
    <?php if (get_row_layout() == 'hero') : ?>
      <?php get_template_part('template-parts/content/section', 'hero') ?>    
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>




<?php get_footer() ?>