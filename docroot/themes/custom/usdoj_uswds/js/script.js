(function ($) {
  Drupal.behaviors.executeSlick = {
    attach: function (context, settings) {

      once('executeSlick', 'html', context).forEach( function (element) {

        if ($(".hero-slideshow-slick")[0]){
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

        if ($(".most-wanted-view")[0]){
          $('.item-list ul').slick({
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

        //tab block mobile slick slider
        if ($('.paragraph--type--tab .field__items')[0]){
          $('.paragraph--type--tab .field__items').slick({
            dots: true,
            infinite: false,
            prevArrow: false,
            nextArrow: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            responsive: [
              {
                breakpoint: 769,
                settings: 'unslick'
              }
            ]
          });
          $(window).resize(function(){
            if($(window).width() < 768) {
              $('.paragraph--type--tab .field__items')[0].slick.refresh();
            }
          });
        }

      })
    }
  };

  Drupal.behaviors.imageGalleryInit = {
    attach: function (context, settings) {

      once('imageGalleryInit', 'html', context ).forEach( function (element) {
        var $gallery = $('.image-gallery-node .slick');
        var $galleryTitle = $('.image-gallery-node h1').first().html();
        
        //* Let colorbox load before inserting the title.
        setTimeout(function() {
          var $colorbox = $('#colorbox');          
          $colorbox.prepend("<div class='colorbox-title'>"+$galleryTitle+"</div>");
        }, 1000);

        var totalImages = $gallery.attr('data-slick-count');        
        var $slide = $gallery.find('.slide__media');

        $slide.append("<div class='total-images'><span>"+totalImages+"</span><img src='/themes/custom/usdoj_uswds/assets/img/usa-icons/image.svg' alt='image icon' width='30' height='30' /></div>");
      });
    }
  };

  //* Show more action center icons when the button is clicked.
  Drupal.behaviors.loadMoreItemsInit = {
    attach: function (context, settings) {

      once('loadMoreItems', 'html', context ).forEach( function (element) {
        var $button = $('.action-center-cta button');
        var $itemsWrapper = $('.action-center-items .action-icons');
        var $allItems = $('.action-center-items .action-icons >.field__item');
        var $hiddenItems = $('.action-center-items .action-icon-hidden');
        var $shownItems = $('.action-center-items .action-icon-shown');

        //* Calculate and set the max height (used for the animation)
        if ($(window).width() >=  1024 ) {
          var iconsHeight = $itemsWrapper.height();
          $itemsWrapper.css({"max-height":iconsHeight});

          //* Remove bottom border of last row.
          var lastRow = $shownItems.length % 3;
          switch(lastRow) {
            case 0:
              //* Modify last 3 items
              $shownItems.last().addClass("no-border");
              $shownItems.eq(-2).addClass("no-border");
              $shownItems.eq(-3).addClass("no-border");
              break;
            case 1:
              //* Modify last item
              $shownItems.last().addClass("no-border");
              break;
            default:
              //* Modify last 2 items
              $shownItems.last().addClass("no-border");
              $shownItems.eq(-2).addClass("no-border");
          } 
        }

        $button.click(function() {
          $hiddenItems.removeClass('action-icon-hidden');
          $button.attr("disabled",true);

          if ($(window).width() >=  1024 ) {
            $('.action-icons').css({"max-height":1000});
            $allItems.removeClass("no-border");
          }
        });
      });
    }
  };

  //* This creates a "mobile menu" out of menus placed in the first column in a two column layout. It also moves layout blocks below the second column.
  Drupal.behaviors.mobileMenu = {
    attach: function (context, settings) {

      once('mobileNav', 'html', context).forEach( function (element) {
        if ($(window).width() <  640 ) {
          var $heading = $(".layout--twocol-section .layout__region--first nav  > h2");
          var $menu = $heading.siblings(".menu");
          var $blocks = $heading.parent("nav").siblings(".block");
          var $section = $heading.closest(".layout")

          $section.children(".layout__region").last().append($blocks);

          $heading.click(function() {
            $(this).toggleClass("open");
          });          
        }
      });
    }
  };

  //tab block functionality
  $('.panel .block-tab').click(function() {
    var i = $(this).attr('id');

    if ($('.panel .block-tab').hasClass('active')) {
      $('.panel .block-tab').removeClass('active');
      $('.panel-content').hide();
    }

    $(this).addClass('active');
    $('#' + i + '-body').fadeIn('slow');
  })

  //Placeholder text news keyword search
  $('input#edit-search-api-fulltext').val('Enter keywords here').click( function() {
    $(this).val('');
  });

  //Placeholder text start date
  $('input#edit-start-date, input#edit-end-date').attr('placeholder','mm/dd/yyyy');

  //news keyword search submit form
  $('a.keyword-form').click(function() {
    $('#views-exposed-form-news-page-1').submit();
  });
  //sort by select change submit form
  $('select[name="sort_by"]').change(function() {
    $('#views-exposed-form-news-page-1').submit();
  });

  //Our Office - expand all link
  $('input#expand').click( function() {
    $('button.usa-accordion__button').attr('aria-expanded', 'true');
    $('.usa-accordion__content').removeAttr('hidden');
  });

})(jQuery);