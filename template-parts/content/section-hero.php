<?php

$heading = get_sub_field('heading');
$subheading = get_sub_field('subheading');
$background = get_sub_field('background');

?>

<!-- HomeHero -->
<section class="relative text-white">
  <!-- VideBG -->
  <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover object-center">
    <source src="<?= $background['video']['url'] ?>" type="video/mp4" />
    <img src="<?= $background['image']['sizes']['large'] ?>">
  </video>
  <!-- BgOverlay -->
  <div class="absolute top-0 left-0 w-full h-full bg-neutral-900 bg-opacity-50"></div>
  <div class="wrapper relative">
    <div class="box">
      <!-- Inner -->
      <div class="h-[80vh] flex flex-col justify-end items-center py-12 md:py-24">
        <!-- Heading -->
        <h2 class="heading text-center mb-12">
          <?= $heading ?>
        </h2>
        <!-- Subheading -->
        <p class="subheading text-center">
          <?= $subheading ?>
        </p>
      </div>
    </div>
  </div>
</section>