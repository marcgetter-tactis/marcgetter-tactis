'use strict';

(function ($) {
  Drupal.behaviors.faqExpandAll = {
    attach: function (context, settings) {

      once('faqExpandAll', 'html', context).forEach(function (element) {

        const faqBlocks = context.querySelectorAll('.faq-mainWrapper')

        const init = (evt) => {
          const expandAllBtn = evt.target.closest(".accordion-grouping__btn");
          const accordionContainer = evt.target.closest(".accordion-grouping");

          if(!expandAllBtn || !accordionContainer) return;

          const ariaStatus = accordionContainer.querySelector(".accordion-grouping__status");
          const allAccordionHeaders = accordionContainer.querySelectorAll(".usa-accordion__button");
          const allAccordionBodies = accordionContainer.querySelectorAll(".usa-accordion__content");

          if (expandAllBtn.getAttribute("aria-expanded")==="false"){

            allAccordionHeaders.forEach(header => header.setAttribute("aria-expanded","true"));
            allAccordionBodies.forEach(body=> body.hidden = false);
            expandAllBtn.setAttribute("aria-expanded","true");
            ariaStatus.setAttribute("aria-label","All items in this group are currently open")
          }else{
            allAccordionHeaders.forEach(header => header.setAttribute("aria-expanded","false"));
            allAccordionBodies.forEach(body=> body.hidden = true);
            expandAllBtn.setAttribute("aria-expanded","false");
            ariaStatus.setAttribute("aria-label","All items in this group are currently closed")

          }
        }

        faqBlocks.forEach(block => addEventListener('click',init))



      });

    }
  }

})(jQuery);