(function ($) {
  Drupal.behaviors.executeSlick = {
    attach: function (context, settings) {

      $('.hero-slideshow').once().slick({
        infinite: true,
        dots: true,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 6000,
      });
    }
  };
})(jQuery);