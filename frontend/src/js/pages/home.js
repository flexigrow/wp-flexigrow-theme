$(function () {
  AOS.init({
    once: true,
  });

  handleGrowthAccordion();
});

function handleGrowthAccordion() {
  $("#growth-accordion")
    .on("shown.bs.collapse", function (event) {
      $(event.target).parent().addClass("accordion-active");
    })

    .on("hide.bs.collapse", function (event) {
      $(event.target).parent().addClass("accordion-default");
      $(event.target).parent().removeClass("accordion-active");
    });
}
