(function ($) {
  Drupal.behaviors.executeSlick = {
    attach: function (context, settings) {

      once('executeSlick', 'html', context).forEach( function (element) {

        if ($(".hero-slideshow")[0]){
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
        }

        if ($(".slides-slideshow")[0]){
          $('.slides-slideshow').slick({
            infinite: true,
            dots: true,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              }
            ]
          });
        }

      })
    }
  };

  //* Show more action center icons when the button is clicked.
  Drupal.behaviors.loadMoreItemsInit = {
    attach: function (context, settings) {

      once('loadMoreItems', 'html', context ).forEach( function (element) {
        $button = $('.action-center-cta button');
        $hiddenItems = $('.action-center-items .action-icons-hidden');

        if ($(".hide-more-button")[0]){
          $button.hide();
        }

        $button.click(function() {
          $hiddenItems.addClass('show-icons');
          $button.attr("disabled",true);
        });
      });
    }
  };

  $('.panel .block-tab').click(function() {
    var i = $(this).attr('id');

    if ($('.panel .block-tab').hasClass('active')) {
      $('.panel .block-tab').removeClass('active');
      $('.panel-content').hide();
    }

    $(this).addClass('active');
    $('#' + i + '-body').fadeIn('slow');
  })

  $(window).on('load resize', function()  {
    if($(window).width() < 768){
      $('.paragraph--type--tab .field__items').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: false,
        prevArrow: false,
        nextArrow: false,
      });
    }else{
      $(".paragraph--type--tab .field__items").slick("unslick");
    }
  });

})(jQuery);