<?php
$col_1_logo = get_field('col_1_logo');
$col_1_content = get_field('col_1_content');
$col_1_social = get_field('col_1_social');

$tools_sub_heading = get_field('tools_sub_heading');
$tools_super_heading = get_field('tools_super_heading');
$tools_logo_group = get_field('tools_logo_group');
?>

<section class="section-footer bg-no-repeat bg-center bg-cover text-white py-8 md:py-32" style="background-image: url(<?php echo $tools_background['url'] ?? ''; ?>);">
  <div class="md:container !px-5 md:px-0 mx-auto grid grid-cols-12 gap-10 lg:gap-4">
    <div class="col-span-12 xl:col-span-3 space-y-10">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img class="w-[134px] md:w-auto" src="<?php echo $col_1_logo['url'] ?? ''; ?>" alt="logo">
      </a>

      <div class="text-lg text-white">
        <?php echo $col_1_content ?? ''; ?>
      </div>

      <div class="flex items-center space-x-4">
        <?php if ($col_1_social) : ?>
          <ul class="flex items-center space-x-4 list-none p-0 m-0">
            <?php foreach ($col_1_social as $social) : ?>
              <li class="flex items-center justify-center border border-solid border-white rounded-full w-[26px] h-[26px] text-xs">
                <a href="<?php echo $social['social_link']['url'] ?? '' ?>" class="text-white">
                  <?php echo $social['social_icon'] ?? '' ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>

      <a href="#" class="wow animate__animated animate__fadeIn md:hidden bg-primary-main inline-block text-dark-main rounded-full py-3 px-10 text-sm font-semibold hover:bg-dark-main hover:ring-1 hover:ring-offset-1 hover:ring-offset-primary-main hover:text-primary-main transition text-center">
        Try it free
      </a>
    </div>

    <div class="hidden xl:block xl:col-span-3"></div>

    <div class="col-span-12 lg:col-span-9 xl:col-span-6 grid grid-cols-12 gap-4">
      <div class="col-span-6 md:col-span-3">
        <h3 class="text-base font-semibold">Features</h3>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu-1',
          'walker'         => new Custom_Walker_Footer_Menu(),
          'menu_class'     => 'flex flex-col px-0 space-y-1 list-none text-sm m-0 list-none',
          'container'      => 'nav',
          'container_class' => 'p-0',
        ));
        ?>
      </div>

      <div class="col-span-6 md:col-span-3 grid grid-cols-12 !gap-5">
        <div class="col-span-12">
          <h3 class="text-base font-semibold">About Us</h3>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu-2',
            'walker'         => new Custom_Walker_Footer_Menu(),
            'menu_class'     => 'flex flex-col px-0 space-y-1 list-none text-sm m-0 list-none',
            'container'      => 'nav',
            'container_class' => 'p-0',
          ));
          ?>
        </div>

        <div class="col-span-12">
          <h3 class="text-base font-semibold">Support</h3>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu-4',
            'walker'         => new Custom_Walker_Footer_Menu(),
            'menu_class'     => 'flex flex-col px-0 space-y-1 list-none text-sm m-0 list-none',
            'container'      => 'nav',
            'container_class' => 'p-0',
          ));
          ?>
        </div>
      </div>

      <div class="col-span-6 md:col-span-3">
        <h3 class="text-base font-semibold">About you</h3>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu-3',
          'walker'         => new Custom_Walker_Footer_Menu(),
          'menu_class'     => 'flex flex-col px-0 space-y-1 list-none text-sm m-0 list-none',
          'container'      => 'nav',
          'container_class' => 'p-0',
        ));
        ?>
      </div>

      <div class="col-span-6 md:col-span-3 hidden md:block">
        <a href="#" class="wow animate__animated animate__fadeIn bg-primary-main inline-block text-dark-main rounded-full py-3 px-10 text-sm font-semibold hover:bg-dark-main hover:ring-1 hover:ring-offset-1 hover:ring-offset-primary-main hover:text-primary-main transition text-center">
          Try it free
        </a>
      </div>
    </div>
  </div>
</section>