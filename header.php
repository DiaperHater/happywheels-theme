<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- START Fonts -->
  <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
  <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-Italic-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
  <!-- END Fonts -->

  <?php wp_head() ?>

  <title><?= get_the_title() ?></title>
</head>

<body>

  <!-- Header -->
  <header class="bg-blue-500 text-white fixed top-0 left-0 w-full z-50 group/header [&.narrow]:top-6 [&.narrow]:bg-transparent">
    <div class="wrapper">
      <div class="box">
        <!-- Inner -->
        <nav class="header__inner py-6 flex items-center duration-200 group-[.narrow]/header:py-3 group-[.narrow]/header:px-6 group-[.narrow]/header:bg-neutral-900 group-[.narrow]/header:bg-opacity-90 group-[.narrow]/header:rounded-lg">
          <!-- Logo -->
          <a href="<?= home_url() ?>" class="text-2xl leading-none font-bold uppercase duration-200 hover:text-blue-500 mr-12">
            HappyWheels
          </a>
          <!-- Links -->
          <ul class="hidden lg:flex lg:items-center lg:gap-x-4 lg:ml-auto">
            <a href="#" class="text-base uppercase duration-200 hover:text-blue-500  decoration-4 underline-offset-4 hover:underline">
              Для кого
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-blue-500  decoration-4 underline-offset-4 hover:underline">
              Уровни
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-blue-500  decoration-4 underline-offset-4 hover:underline">
              Цены
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-blue-500  decoration-4 underline-offset-4 hover:underline">
              Тренер
            </a>
          </ul>
          <!-- Buttons -->
          <div class="flex gap-x-4 items-center ml-auto lg:ml-12">
            <!-- Burger  -->
            <button class="burger w-[36px] flex flex-col gap-y-2 group group-[.narrow]/header:gap-y-1.5 group-[.narrow]/header:w-[30px] lg:hidden" onclick="burgerOnClick()">
              <div class="w-full h-1 bg-white duration-200 origin-top-right group-hover:bg-blue-500 group-[.active]:-rotate-45"></div>
              <div class="w-full h-1 bg-white duration-200 group-hover:bg-blue-500 group-[.active]:-translate-x-full group-[.active]:opacity-0 group-[.active]:invisible"></div>
              <div class="w-full h-1 bg-white duration-200 origin-bottom-right group-hover:bg-blue-500 group-[.active]:rotate-45"></div>
            </button>
            <a href="#" class="hidden lg:block lg:button">
              Контакты
            </a>
          </div>
        </nav>
      </div>
    </div>
    <!-- MobileMenu -->
    <nav class="mobile-menu absolute top-full left-full w-full h-[100vh] overflow-auto bg-neutral-900 bg-opacity-90 duration-200 lg:hidden">
      <div class="wrapper">
        <div class="box">
          <!-- Inner -->
          <div class="flex flex-col gap-y-16 pt-14 pb-40">
            <!-- Links -->
            <ul class="flex flex-col gap-y-4">
              <a href="#" class="text-lg uppercase duration-200 hover:text-blue-500  decoration-4 underline-offset-4 hover:underline">
                Для кого
              </a>
              <a href="#" class="text-lg uppercase duration-200 hover:text-blue-500  decoration-4 underline-offset-4 hover:underline">
                Уровни
              </a>
              <a href="#" class="text-lg uppercase duration-200 hover:text-blue-500  decoration-4 underline-offset-4 hover:underline">
                Цены
              </a>
              <a href="#" class="text-lg uppercase duration-200 hover:text-blue-500  decoration-4 underline-offset-4 hover:underline">
                Тренер
              </a>
            </ul>
            <!-- Socials -->
            <div class="flex items-center gap-x-8 self-center">
              <?php get_template_part('template-parts/components/social-icons', null) ?>
            </div>
            <!-- Contact -->
            <a href="#" class="button self-center">
              Контакты
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="mt-[76px] lg:mt-[88px]">