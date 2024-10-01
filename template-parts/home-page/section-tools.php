<?php
$tools_background = get_field('tools_background');
$tools_banner = get_field('tools_banner');
$tools_heading = get_field('tools_heading');
$tools_sub_heading = get_field('tools_sub_heading');
$tools_super_heading = get_field('tools_super_heading');
$tools_logo_group = get_field('tools_logo_group');
?>

<section class="section-tools bg-no-repeat bg-center bg-cover text-white py-8 md:py-32" style="background-image: url(<?php echo $tools_background['url'] ?? ''; ?>);">
  <div class="text-white flex flex-col md:flex-row items-center justify-between mb-20 gap-10">
    <div class="relative">
      <img class="w-[836px] relative z-10" src="<?php echo $tools_banner['url'] ?? ""; ?> " alt="">
      <img data-aos="fade" class="hidden md:block absolute top-full left-0 w-[220px] -translate-y-14 z-0" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/green-arrow.svg'; ?>" alt="">
    </div>

    <div class="space-y-10 max-w-[638px] mx-auto">
      <h2 data-aos="fade-up" class="text-[42px] font-bold">
        <?php echo $tools_heading ?? ''; ?>
      </h2>

      <p data-aos="fade-up" class="text-lg">
        <?php echo $tools_sub_heading ?? ''; ?>
      </p>
    </div>
  </div>

  <div class="md:container !px-5 md:px-0 mx-auto grid grid-cols-2 gap-10 md:gap-4">
    <div data-aos="fade" class="col-span-2 md:col-span-1 self-center space-y-5 md:space-y-10 prose-h2:text-3xl md:prose-h2:text-5xl">
      <?php echo $tools_super_heading ?? ''; ?>
    </div>

    <img data-aos="fade" class="col-span-2 md:col-span-1 w-[593px] justify-self-end self-center" src="<?php echo $tools_logo_group['url'] ?? ''; ?>" alt="">
  </div>
</section>