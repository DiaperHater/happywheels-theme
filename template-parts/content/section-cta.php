<?php
$image = get_sub_field('image');
$heading = get_sub_field('heading');
$link = get_sub_field('link');
?>

<!-- CTA -->
<section class="py-48 relative">
  <!-- BG -->
  <picture class="">
    <img src="<?= $image['url'] ?>" class="absolute top-0 left-0 w-full h-full object-cover object-center" alt="Denis Novozilov Dubai HappyWheels Roller Classes">
  </picture>
  <div class="wrapper">
    <div class="box relative flex flex-col items-center">
      <h2 class="heading mb-16 text-white text-center">
        <?= $heading ?>
      </h2>
      <a href="<?= $link['url'] ?>" class="button">
        <?= $link['title'] ?>
      </a>
    </div>
  </div>
</section>