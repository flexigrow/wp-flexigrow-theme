<?php
$sw_banner = get_field('sw_banner');
$sw_title = get_field('sw_title');
$sw_button_1 = get_field('sw_button_1');
$sw_button_2 = get_field('sw_button_2');
$sw_body_card = get_field('sw_body_card');
$sw_list = get_field('sw_list');
?>

<section class="section-simpleway bg-no-repeat bg-center bg-cover" style="background-image: url(<?php echo $sw_banner['url'] ?? ''; ?>);">
  <div class="relative bg-blackOverlay py-12 md:py-32">
    <div class="md:container mx-auto !px-5 md:!px-0 text-white">
      <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-8 md:mb-20">
        <h2 data-aos="fade-up" class="text-3xl md:text-[42px] md:leading-[46px] font-semibold">
          <?php echo $sw_title; ?>
        </h2>

        <div class="hidden md:flex items-center space-x-6">
          <a href="<?php echo $sw_button_1['url'] ?? ''; ?>" class="text-primary-main font-bold underline hover:text-primary-main">
            <?php echo $sw_button_1['title'] ?? ''; ?>
          </a>
          <a href="<?php echo $sw_button_2['url'] ?? ''; ?>" class="bg-primary-main text-dark-main rounded-full py-3 px-10 text-sm font-semibold hover:bg-dark-main hover:ring-1 hover:ring-offset-1 hover:ring-offset-primary-main hover:text-primary-main transition">
            <?php echo $sw_button_2['title'] ?? ''; ?>
          </a>
        </div>
      </div>

      <div class="grid grid-cols-12 gap-4 md:gap-20 mb-20 md:mb-0">
        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
          <div class="border border-solid border-white space-y-5 !p-5 md:!px-8 md:!py-14 rounded-3xl">
            <h3 data-aos="fade-up" class="prose text-2xl leading-[36px] font-bold text-white"><?php echo $sw_body_card['heading'] ?? ''; ?></h3>
            <div data-aos="fade-up" class="prose text-white"><?php echo $sw_body_card['content'] ?? ''; ?></div>
          </div>
        </div>

        <div class="col-span-12 xl:col-span-8 lg:col-span-12">
          <div class="grid grid-cols-12 gap-6">
            <?php if (!empty($sw_list)) : ?>
              <?php foreach ($sw_list as $key => $tab) : ?>
                <div data-aos="fade-up" data-aos-delay="<?php echo $key * 100; ?>" class="col-span-12 md:col-span-4">
                  <div class="flex h-full space-x-5 pr-6 pb-10">
                    <div class="basis-[36px] border border-white rounded-full !w-[36px] !h-[36px] flex items-center justify-center">
                      <img src="<?php echo $tab['icon']['url'] ?? ''; ?>" alt="">
                    </div>

                    <div class="flex-1 space-y-3">
                      <h3 class="text-xl font-semibold">
                        <?php echo $tab['heading'] ?? ''; ?>
                      </h3>
                      <div class="prose text-sm text-white">
                        <?php echo $tab['body'] ?? ''; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="md:hidden flex flex-col items-center space-y-10">
        <a href="<?php echo $sw_button_2['url'] ?? ''; ?>" class="bg-primary-main text-dark-main rounded-full py-3 px-28 text-sm font-semibold">
          <?php echo $sw_button_2['title'] ?? ''; ?>
        </a>
        <a href="<?php echo $sw_button_1['url'] ?? ''; ?>" class="text-primary-main font-bold underline hover:text-primary-main">
          <?php echo $sw_button_1['title'] ?? ''; ?>
        </a>
      </div>
    </div>
</section>