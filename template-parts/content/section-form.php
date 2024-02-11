<!-- Form -->
<section id="form" class="py-24 bg-blue-500">
  <div class="wrapper">
    <div class="box">
      <div class="mb-24 grid gap-y-4">
        <!-- Heading -->
        <h2 class="heading text-white row-start-2">
          Запись на тренировку
        </h2>
        <!-- Contacts -->
        <div class="flex flex-col items-end">
          <a href="tel:+971558730851" class="text-3xl font-semibold underline text-white block mb-4">
            +971-55-8730851
          </a>
          <!-- Socials -->
          <div class="flex gap-x-6 ml-auto text-white">
            <?php get_template_part('template-parts/components/social-icons', null, array('hover_off' => true)) ?>
          </div>
        </div>
      </div>
      <!-- FormForm -->
      <div class="max-w-xl mx-auto">
        <?= do_shortcode('[contact-form-7 id="9b147c5" title="Contact form 1"]') ?>
      </div>
    </div>
  </div>
</section>