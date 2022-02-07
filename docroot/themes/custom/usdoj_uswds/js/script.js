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


      })
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