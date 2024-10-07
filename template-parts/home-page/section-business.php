<?php
$tools_background = get_field('tools_background');
$be_banner = get_field('be_banner');
$be_heading = get_field('be_heading');
$card_1_content = get_field('card_1_content');
$card_2_content = get_field('card_2_content');
?>

<section class="section-business bg-black text-white py-10 md:py-32">
  <div class="md:container !px-5 md:px-0 mx-auto grid grid-cols-2 gap-2 md:gap-4">
    <div class="col-span-2 md:col-span-1">
      <div class="wow animate__animated animate__fadeIn self-start space-y-10 prose-h2:text-3xl md:prose-h2:text-5xl text-white mb-14">
        <?php echo $be_heading ?? ''; ?>
      </div>

      <div class="bg-white text-dark-main rounded-3xl !p-5 !py-10 md:!p-14 text-lg md:text-2xl max-w-[582px] relative pr-20 mb-2">
        <div>
          <div class="h-[4px] w-1/3 bg-black mb-8 md:mb-12"></div>
          <div class="wow animate__animated animate__fadeIn">
            <?php echo $card_1_content ?? ''; ?>
          </div>
        </div>

        <div class="hidden md:block bg-dark-main text-white rounded-3xl p-14 text-lg md:text-2xl max-w-[582px] md:absolute md:left-[90%] md:top-20 w-full z-20 border border-solid border-white">
          <div class="h-[4px] w-1/3 bg-primary-main mb-8 md:mb-12"></div>
          <div class="wow animate__animated animate__fadeIn">
            <?php echo $card_2_content ?? ''; ?>
          </div>
        </div>
      </div>

      <div class="md:hidden bg-dark-main text-white rounded-3xl !p-5 !py-10 md:!p-14 text-lg md:text-2xl max-w-[582px] md:absolute md:left-[90%] md:top-20 w-full z-20 border border-solid border-white">
        <div class="h-[4px] w-1/3 bg-primary-main mb-8 md:mb-12"></div>
        <div>
          <?php echo $card_2_content ?? ''; ?>
        </div>
      </div>
    </div>

    <div class="col-span-2 md:col-span-1">
      <img class="wow animate__animated animate__fadeIn w-[593px] justify-self-end self-start relative z-0" src="<?php echo $be_banner['url'] ?? ''; ?>" alt="">
    </div>
</section>