  </main>

  <!-- Footer -->
  <footer class="pt-12 pb-24">
    <div class="wrapper">
      <div class="box">
        <!-- Navigation -->
        <div class="w-[920px] max-w-full mx-auto border-b border-b-white pb-8 mb-12 md:grid md:grid-cols-8 md:gap-x-6 lg:items-center">
          <!-- Logo -->
          <a href="<?= home_url() ?>" class="text-2xl leading-none font-bold uppercase duration-200 hover:text-yellow-500  block text-center mb-12 md:col-span-2 md:col-start-4 md:mb-0">
            HappyWheels
          </a>
        </div>
      </div>
      <!-- Socials -->
      <div class="flex gap-x-6 justify-center mb-20">
        <?php get_template_part('template-parts/components/social-icons', null) ?>
      </div>
      <!-- Sign -->
      <p class="text-center font-light">
        © 2024
      </p>
    </div>
    </div>
  </footer>

  <?php wp_footer() ?>

  </body>

  </html>