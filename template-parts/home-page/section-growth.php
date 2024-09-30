<?php
$growth_heading = get_field('growth_heading');
$growth_sub_heading = get_field('growth_sub_heading');
$growth_tabs = get_field('growth_tabs');
$growth_banner = get_field('growth_banner');
?>

<section class="section-growth bg-black">
  <div class="container mx-auto bg-dark-main rounded-[30px] px-20 py-32 text-white -translate-y-14">
    <div class="grid grid-cols-12 gap-4 mb-10 md:mb-20">
      <h2 class="text-3xl md:text-[42px] font-bold col-span-12 md:col-span-6 self-center"><?php echo $growth_heading; ?></h2>
      <p data-aos="fade-up" class="text-xl md:text-2xl col-span-12 md:col-span-6 self-center"><?php echo $growth_sub_heading; ?></p>
    </div>

    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-12 md:col-span-5">
        <div class="accordion space-y-2" id="growth-accordion" role="tablist">
          <?php if (!empty($growth_tabs)) : ?>
            <?php foreach ($growth_tabs as $key => $tab) : ?>
              <div class="accordion-item accordion-default">
                <h2 class="accordion-header">
                  <div class="hidden md:block" data-bs-toggle="tab" data-bs-target="#tab<?php echo $key; ?>">
                    <div class="accordion-action" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
                      <span data-aos="fade" data-aos-delay="<?php echo $key * 100; ?>"><?php echo $tab['tab_label'] ?? ''; ?></span>
                    </div>
                  </div>

                  <div class="md:hidden" data-bs-toggle="tab" data-bs-target="#mobile_tab<?php echo $key; ?>">
                    <div class="accordion-action" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
                      <span data-aos="fade" data-aos-delay="<?php echo $key * 100; ?>"><?php echo $tab['tab_label'] ?? ''; ?></span>
                    </div>
                  </div>
                </h2>

                <div id="collapse<?php echo $key; ?>" class="accordion-collapse collapse px-4 pb-4 mt-10" data-bs-parent="#growth-accordion">
                  <div class="accordion-body space-y-4 p-0">
                    <div class="text-lg leading-[24px]"><?php echo $tab['tab_content'] ?? ''; ?></div>

                    <div class="md:hidden tab-pane fade" id="mobile_tab<?php echo $key; ?>" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                      <img data-aos="fade-up" src="<?php echo $tab['tab_banner']['url'] ?? ''; ?>" alt="">
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-span-7">
        <div class="tab-content">
          <?php if (!empty($growth_tabs)) : ?>
            <?php foreach ($growth_tabs as $key => $tab) : ?>
              <div class="tab-pane fade" id="tab<?php echo $key; ?>" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <img data-aos="fade-up" src="<?php echo $tab['tab_banner']['url'] ?? ''; ?>" alt="">
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>