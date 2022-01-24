(function ($) {
  Drupal.behaviors.executeSlick = {
    attach: function (context, settings) {

      once('executeSlick', 'html', context).forEach( function (element) {

        $('.hero-slideshow').slick({
          infinite: true,
          dots: true,
          autoplay: true,
          arrows: false,
          autoplaySpeed: 6000,

        });

        //* Pause the slideshow when the dot is clicked.
        $('.hero-slideshow .slick-dots button').on("click", function() {
          $(this).closest('.hero-slideshow').slick('slickPause');
        });
      })

    }
  };
})(jQuery);