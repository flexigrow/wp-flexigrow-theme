<?php
$tm_heading = get_field('tm_heading');
$tm_slider = get_field('tm_slider');
$tools_heading = get_field('tools_heading');
$tools_sub_heading = get_field('tools_sub_heading');
$tools_super_heading = get_field('tools_super_heading');
$tools_logo_group = get_field('tools_logo_group');
?>

<section class="section-testimonial bg-no-repeat bg-center bg-cover text-white py-10 md:py-32">
  <div class="container mx-auto flex justify-between items-start">
    <h2 class="wow animate__fadeInUp text-white text-3xl md:text-4xl font-bold text-center mb-10 md:mb-20 mx-auto">
      <?php echo $tm_heading; ?>
    </h2>

    <div class="hidden md:flex items-center space-x-2 hover:ring-1 ring-offset-1 transition rounded-full p-2">
      <div class="tm-slider-prev hover:bg-primary-main hover:text-dark-main transition cursor-pointer w-[40px] h-[40px] grid place-content-center border border-white rounded-full">
        <i class="fa-solid fa-arrow-left"></i>
      </div>
      <div class="tm-slider-next hover:bg-primary-main hover:text-dark-main transition cursor-pointer w-[40px] h-[40px] grid place-content-center border border-white rounded-full">
        <i class="fa-solid fa-arrow-right"></i>
      </div>
    </div>
  </div>

  <div class="tm-testimonial">
    <?php if (!empty($tm_slider)) : ?>
      <?php foreach ($tm_slider as $key => $tab) : ?>
        <div class="px-2">
          <div class="bg-dark-main aspect-[790/344] flex flex-col justify-between rounded-3xl !p-5 !py-8 md:!p-10">
            <div class="space-y-5 mb-8">
              <div class="text-primary-main text-2xl">
                <?php
                $max_rating = 5;
                $rating = $tab['slide_rating'] ?? 0;
                for ($i = 0; $i < $max_rating; $i++) {
                  if ($i < $rating) {
                    echo '<i class="fa-solid fa-star"></i>';
                  } else {
                    echo '<i class="fa-regular fa-star"></i>';
                  }
                }
                ?>
              </div>

              <div class="text-base md:text-2xl prose text-white">
                <?php echo $tab['slide_body']; ?>
              </div>
            </div>

            <div class="flex items-center space-x-4">
              <div class="w-[40px] h-[40px] flex items-center justify-center">
                <img src="<?php echo $tab['slide_avatar']['url'] ?? ''; ?>" alt="avatar">
              </div>

              <h6 class="text-sm font-semibold">
                <?php echo $tab['slide_name']; ?>
              </h6>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <div class="flex md:hidden justify-center space-x-2 rounded-full p-2 mt-10">
    <div class="tm-slider-prev hover:bg-primary-main hover:text-dark-main transition cursor-pointer w-[40px] h-[40px] grid place-content-center border border-white rounded-full">
      <i class="fa-solid fa-arrow-left"></i>
    </div>
    <div class="tm-slider-next hover:bg-primary-main hover:text-dark-main transition cursor-pointer w-[40px] h-[40px] grid place-content-center border border-white rounded-full">
      <i class="fa-solid fa-arrow-right"></i>
    </div>
  </div>
</section>