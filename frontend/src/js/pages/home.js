$(function () {
  // sal({
  //   threshold: 0.8,
  //   ease: "ease-in-out",
  // });

  new WOW().init();

  $(".tm-testimonial").slick({
    dots: false,
    infinite: true,
    speed: 500,
    centerMode: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    autoplay: true,
    autoplaySpeed: 5000,
    prevArrow: ".tm-slider-prev",
    nextArrow: ".tm-slider-next",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });

  handleScrollToTop();

  function handleScrollToTop() {
    // Show or hide the button
    window.addEventListener("scroll", function () {
      const scrollToTopButton = document.getElementById("scrollToTop");
      if (window.scrollY > 500) {
        scrollToTopButton.classList.remove("hidden");
      } else {
        scrollToTopButton.classList.add("hidden");
      }
    });

    // Scroll to top when the button is clicked
    document
      .getElementById("scrollToTop")
      .addEventListener("click", function () {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
  }

  // Debounce function
  function debounce(func, wait) {
    let timeout;
    return function (...args) {
      const context = this;
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(context, args), wait);
    };
  }

  // Scroll event handler with debounce
  $(window).on(
    "scroll",
    debounce(function () {
      if ($(this).scrollTop() > 100) {
        $(".tm-header").addClass("tm-header--scrolled");
      } else {
        $(".tm-header").removeClass("tm-header--scrolled");
      }
    }, 50)
  ); // Adjust the debounce wait time as needed
});
