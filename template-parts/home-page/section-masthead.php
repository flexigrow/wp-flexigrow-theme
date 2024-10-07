<?php
$background_image = get_field('home_page_background');
$home_page_mobile_background = get_field('home_page_mobile_background');
$home_page_heading = get_field('home_page_heading');
$home_page_subheading = get_field('home_page_subheading');
?>

<section class="section-masthead">
  <div class="masthead-content relative">
    <img class="w-full hidden md:block aspect-[393/480] md:min-h-[940px] md:max-h-[940px] object-center object-cover" src="<?php echo $background_image['url'] ?? ''; ?>" alt="">
    <img class="w-full md:hidden object-center object-cover" src="<?php echo $home_page_mobile_background['url'] ?? ''; ?>" alt="">

    <div class="bg-black md:!bg-transparent !px-5 !py-10 md:!px-0 md:!py-0 md:container md:absolute md:left-1/2 md:top-1/2 md:-translate-x-1/2 md:-translate-y-1/2 text-white">
      <div class="space-y-5">
        <h2 class="wow animate__animated animate__fadeIn text-base md:first-letter:text-lg text-primary-main">
          <?php echo $home_page_subheading; ?>
        </h2>
        <h1 class="wow animate__animated animate__fadeIn text-[42px] md:text-[56px] font-bold">
          <?php echo $home_page_heading; ?>
        </h1>
      </div>
    </div>
  </div>
</section>