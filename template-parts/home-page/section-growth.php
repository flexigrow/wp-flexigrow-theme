<?php
$growth_heading = get_field('growth_heading');
$growth_sub_heading = get_field('growth_sub_heading');
$growth_tabs = get_field('growth_tabs');
$growth_banner = get_field('growth_banner');
$growth_active_tab = get_field('growth_active_tab');
?>

<script>
  (function($) {
    $(document).ready(function() {

      function debounce(func, delay) {
        let timeout;

        return function executedFunc(...args) {
          if (timeout) {
            clearTimeout(timeout);
          }

          timeout = setTimeout(() => {
            func(...args);
            timeout = null;
          }, delay);
        };
      }

      handleTabCollapse()

      const debounceTabResize = debounce(handleTabCollapse, 200);

      $(window).on('resize', function() {
        debounceTabResize()
      })

      function handleTabCollapse() {
        const isMobile = $(window).width() < 768;

        // init first tab & collapse
        if (isMobile) {
          $(
            "#growth-accordion [data-bs-target='#collapse<?php echo ($growth_active_tab ?? 1) - 1; ?>']:is(.collapse-mobile)"
          ).collapse("show");
          $("#growth-accordion #collapse<?php echo ($growth_active_tab ?? 1) - 1; ?>").collapse("show");
        } else {
          $("#growth-accordion [data-bs-target='#tab<?php echo ($growth_active_tab ?? 1) - 1; ?>']").tab("show");
          $(
            "#growth-accordion [data-bs-target='#collapse<?php echo ($growth_active_tab ?? 1) - 1; ?>']:not(.collapse-mobile)"
          ).collapse("show");
          $("#growth-accordion #collapse<?php echo ($growth_active_tab ?? 1) - 1; ?>").collapse("show");
        }

        // handle collapse & accordion callback
        $("#growth-accordion")
          .on("shown.bs.collapse", function(event) {
            $(event.target).parents(".accordion-item").addClass("accordion-active");
          })
          .on("hide.bs.collapse", function(event) {
            const eventTarget = $(event.target)
            eventTarget.parents(".accordion-item").addClass("accordion-default");
            eventTarget
              .parents(".accordion-item")
              .removeClass("accordion-active");
          });
      }
    });
  })(jQuery);
</script>

<section class="section-growth bg-black">
  <div class="container mx-auto bg-dark-main md:rounded-[30px] !p-5 md:!px-20 md:!py-32 text-white md:-translate-y-14">
    <div class="grid grid-cols-12 gap-4 mb-10 md:mb-20">
      <h2 class="text-3xl md:text-[42px] font-bold col-span-12 md:col-span-6 self-center"><?php echo $growth_heading; ?></h2>
      <p class="wow animate__animated animate__fadeIn text-xl md:text-2xl col-span-12 md:col-span-6 self-center"><?php echo $growth_sub_heading; ?></p>
    </div>

    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-12 md:col-span-5">
        <div class="accordion space-y-2" id="growth-accordion" role="tablist">
          <?php if (!empty($growth_tabs)) : ?>
            <?php foreach ($growth_tabs as $key => $tab) : ?>
              <div class="accordion-item accordion-default">
                <h2 class="accordion-header">
                  <!-- desktop -->
                  <div class="hidden md:block" data-bs-toggle="tab" data-bs-target="#tab<?php echo $key; ?>">
                    <div class="accordion-action" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
                      <span class="wow animate__animated animate__fadeIn" data-wow-delay="<?php echo $key * 100; ?>ms"><?php echo $tab['tab_label'] ?? ''; ?></span>
                    </div>
                  </div>

                  <!-- mobile -->
                  <div class="md:hidden tab-mobile" data-bs-toggle="tab" data-bs-target="#mobile_tab<?php echo $key; ?>">
                    <div class="accordion-action collapse-mobile" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
                      <span class="wow animate__animated animate__fadeIn" data-wow-delay="<?php echo $key * 100; ?>ms"><?php echo $tab['tab_label'] ?? ''; ?></span>
                    </div>
                  </div>
                </h2>

                <div id="collapse<?php echo $key; ?>" class="accordion-collapse collapse px-4 pb-4 mt-10" data-bs-parent="#growth-accordion">
                  <div class="accordion-body space-y-4 p-0">
                    <div class="text-lg leading-[24px]"><?php echo $tab['tab_content'] ?? ''; ?></div>

                    <div class="md:hidden" id="mobile_tab<?php echo $key; ?>" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                      <img class="wow animate__animated animate__fadeIn" src="<?php echo $tab['tab_banner']['url'] ?? ''; ?>" alt="">
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
                <img class="wow animate__animated animate__fadeIn" src="<?php echo $tab['tab_banner']['url'] ?? ''; ?>" alt="">
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>