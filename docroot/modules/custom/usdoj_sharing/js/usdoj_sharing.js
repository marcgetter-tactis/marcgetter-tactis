/**
 * Javascript enhancements for the USDOJ Sharing widget.
 */
(function ($) {
  Drupal.behaviors.usdojSharing = {
    attach: function (context, settings) {
      // Only display this with javascript, since it doesn't work without it.
      $('.usdoj-sharing').show();
      // When the user hovers out of the widget, hide it after a certain delay.
      $('.usdoj-sharing').hoverIntent({
        out: function() {
          $('.usdoj-sharing ul').hide();
          $('#usdoj-sharing-toggle').removeClass('active');
        },
        over: function() {},
        timeout: 500
      });
      // Apply the click behavior to the toggle.
      $('#usdoj-sharing-toggle').click(function(e) {
        $('.usdoj-sharing ul').toggle();
        $(this).toggleClass('active');
      });
      // Keyboard accessibility.
      $('#usdoj-sharing-toggle').keypress(function (e) {
        if (e.which == 13) {
          $(this).click();
          e.preventDefault();
        }
      });
    }
  };
})(jQuery);
