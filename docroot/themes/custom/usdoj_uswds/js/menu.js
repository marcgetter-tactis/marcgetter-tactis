'use strict';
(function ($) {
  Drupal.behaviors.portMenuLinks = {
    attach: function (context, settings) {

      once('portMenuLinks', 'html', context).forEach( function (element) {

        const primaryMenu = document.querySelector('HEADER .usa-nav'); //?
        const megaMenuWrappers = primaryMenu.querySelectorAll('.menu_level__1');

        const portNonImageLinks = () => {
          if(!megaMenuWrappers) return;
          megaMenuWrappers.forEach(megaMenuWrapper => {
            const nonImagedLinksContainer = megaMenuWrapper.querySelector('.non_imaged_links__container');
            const nonImagedLinks = megaMenuWrapper.querySelectorAll('.no_menu_link_imaged');
            if(!nonImagedLinks) return;
            nonImagedLinks.forEach(link => {
              const linkParent = link.closest('.individual_menu_level__1');
              nonImagedLinksContainer.appendChild(linkParent);
            });
          });
        };

        portNonImageLinks();

      });

    }
  };
})(jQuery);