<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="tm-header w-full fixed top-0 left-0 z-50 transition duration-150 ease-in-out">
    <div class="container flex items-center justify-between mx-auto w-full z-10 py-8">
      <div class="w-full lg:w-auto">
        <div class="flex flex-auto justify-between w-full">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="w-[134px] md:w-auto" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flexigrow-logo.svg'; ?>" alt="Flexigrow">
          </a>

          <div class="lg:hidden cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m0 6H4"></path>
            </svg>
          </div>
        </div>
      </div>

      <div class="flex items-center space-x-4">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'walker'         => new Custom_Walker_Nav_Menu(),
          'menu_class'     => 'hidden lg:flex flex-wrap px-0 list-none text-sm m-0',
          'container'      => 'nav',
          'container_class' => 'p-0 ml-auto',
        ));
        wp_nav_menu(array(
          'theme_location' => 'header-menu-actions',
          'walker'         => new Custom_Walker_Nav_Menu_Actions(),
          'menu_class'     => 'hidden lg:flex flex-wrap items-center space-x-3 list-none header-menu-actions m-0 px-0',
          'container'      => 'nav',
          'container_class' => '',
        ));
        ?>
      </div>
    </div>
  </header><!-- #masthead -->

  <div class="offcanvas offcanvas-end bg-dark-main h-screen" data-bs-backdrop="static" tabindex="-1" id="offcanvasRight" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header justify-end">
      <div data-bs-dismiss="offcanvas" aria-label="Close">
        <svg class="w-6 h-6 text-white cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </div>
    </div>
    <div class="offcanvas-body">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'walker'         => new Custom_Walker_Nav_Menu(),
        'menu_class'     => 'flex flex-col px-0 list-none m-0 text-center text-lg divide-y divide-white divide-solid',
        'container'      => 'nav',
        'container_class' => 'p-0 ml-auto mb-10',
      ));
      wp_nav_menu(array(
        'theme_location' => 'header-menu-actions',
        'walker'         => new Custom_Walker_Nav_Menu_Actions(),
        'menu_class'     => 'flex flex-col items-center list-none header-menu-actions m-0 px-0 space-y-3',
        'container'      => 'nav',
        'container_class' => '',
      ));
      ?>
    </div>
  </div>

  <div id="scrollToTop" class="cursor-pointer fixed bottom-24 right-6 bg-primary-main text-dark-main p-2 rounded-full shadow-lg hidden z-[100]">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
    </svg>
  </div>

  <div id="content" class="site-content">