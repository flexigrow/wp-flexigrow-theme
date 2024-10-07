<?php
$faq_heading = get_field('faq_heading');
$faq_list = get_field('faq_list');
$faq_active_tab = get_field('faq_active_tab');

$faq_card = get_field('faq_card');
$faq_card_heading = $faq_card['card_heading'];
$faq_card_body = $faq_card['card_body'];
$faq_card_action = $faq_card['card_action'];
?>

<script>
  (function($) {
    $(document).ready(function() {

      // init first tab & collapse
      $("#faq-accordion [data-bs-target='#faq_tab<?php echo ($faq_active_tab ?? 1) - 1; ?>']").tab("show");
      $("#faq-accordion #faq_collapse<?php echo ($faq_active_tab ?? 1) - 1; ?>").collapse("show");

      // handle collapse & accordion callback
      $("#faq-accordion")
        .on("shown.bs.collapse", function(event) {
          $(event.target).parents(".accordion-item").addClass("accordion-active");
          $(event.target).parent(".accordion-item").find('.faq-expend > i').attr('class', 'fas fa-minus');
        })
        .on("hide.bs.collapse", function(event) {
          const eventTarget = $(event.target)
          eventTarget.parent(".accordion-item").find('.faq-expend > i').attr('class', 'fas fa-plus');
          eventTarget.parents(".accordion-item").addClass("accordion-default");
          eventTarget
            .parents(".accordion-item")
            .removeClass("accordion-active");
        });
    });
  })(jQuery);
</script>

<section class="clear-both section-faq bg-no-repeat bg-center bg-cover text-white py-8 md:pt-32 md:pb-40" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/images/bg-tools.png' ?? ''; ?>);">
  <div class="md:container !px-5 md:px-0 mx-auto grid grid-cols-2 gap-10 md:gap-4">
    <div class="wow animate__animated animate__fadeIn col-span-2 md:col-span-1 space-y-5 md:space-y-10 prose-h2:text-3xl md:prose-h2:text-5xl text-white">
      <?php echo $faq_heading ?? ''; ?>
    </div>

    <div class="col-span-2 md:col-span-1 md:mb-32">
      <div class="accordion space-y-3" id="faq-accordion" role="tablist">
        <?php if (!empty($faq_list)) : ?>
          <?php foreach ($faq_list as $key => $tab) : ?>
            <div class="wow animate__animated animate__fadeIn accordion-item accordion-default">
              <h2 class="accordion-header">
                <div data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="faq_collapse<?php echo $key; ?>">
                  <div class="cursor-pointer text-lg md:text-2xl flex items-center space-x-5">
                    <div class="faq-expend basis-[40px] w-[40px] h-[40px] grid place-content-center border border-white rounded-full !text-sm">
                      <i class="fas fa-plus"></i>
                    </div>
                    <span class="flex-1" data-wow-delay="<?php echo $key * 100; ?>ms">
                      <?php echo $tab['faq_heading'] ?? ''; ?>
                    </span>
                  </div>
                </div>
              </h2>

              <div id="faq_collapse<?php echo $key; ?>" class="accordion-collapse collapse px-4 pb-4 !mt-5" data-bs-parent="#faq-accordion">
                <div class="accordion-body space-y-4 p-0">
                  <div class="text-lg leading-[24px]"><?php echo $tab['faq_body'] ?? ''; ?></div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<div class="container mx-auto">
  <div class="bg-dark-main grid grid-cols-2 col-span-2 gap-4 !px-5 !py-14 md:!px-20 md:!py-32 md:rounded-3xl md:-translate-y-40 -mx-5 md:mx-0">
    <div class="col-span-2 md:col-span-1">
      <div class="wow animate__animated animate__fadeIn prose-h2:text-3xl md:prose-h2:text-[42px] text-white"><?php echo $faq_card_heading ?? ''; ?></div>
    </div>

    <div class="col-span-2 md:col-span-1">
      <div class="prose-h2:text-3xl md:prose-h2:text-[42px] text-white space-y-4 mb-14"><?php echo $faq_card_body ?? ''; ?></div>

      <a href="<?php echo $faq_card_action['url'] ?? ''; ?>" class="wow animate__animated animate__fadeIn bg-primary-main inline-block text-dark-main rounded-full py-3 px-10 text-sm font-semibold hover:bg-dark-main hover:ring-1 hover:ring-offset-1 hover:ring-offset-primary-main hover:text-primary-main transition">
        <?php echo $faq_card_action['title'] ?? ''; ?>
      </a>
    </div>
  </div>
</div>