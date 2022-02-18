'use strict';
(function ($) {
  Drupal.behaviors.portMenuLinks = {
    attach: function (context, settings) {

      once('portMenuLinks', 'html', context).forEach(function (element) {

        const primaryMenu = document.querySelector('HEADER .usa-nav'); //?
        const megaMenuWrappers = primaryMenu.querySelectorAll('.menu_level__1');

        const portNonImageLinks = () => {
          if (!megaMenuWrappers) {
            return;
          }
          megaMenuWrappers.forEach(megaMenuWrapper => {
            const nonImagedLinksContainer = megaMenuWrapper.querySelector('.non_imaged_links__container');
            const nonImagedLinks = megaMenuWrapper.querySelectorAll('.no_menu_link_imaged');
            if (!nonImagedLinks) {
              return;
            }
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
  Drupal.behaviors.usdojMMSlider = {
    attach: function (context, settings) {

      once('usdojMMSlider', 'html', context).forEach(function (element) {

        const header = context.getElementById("header");
        const nav = header.querySelector("nav.usa-nav");
        const menuClasses = {
          mainWrapper: "usdojMobileMenuSlider", // This class is now added by
                                                // default via twig file to fix
                                                // browser inconsistencies
          activeChild: "usdojMobileMenuSlider__activeChild",
          itemOpen: "usdojMobileMenuSlider__open",
          itemHidden: "usdojMobileMenuSlider__hidden"
        }
        const state = {
          menuOpen: false,
        }
        const menuBtn = header.querySelector("#mobile-btn");
        const desktopBreakpoint = 1024;
        let parentBtn, nestedBtn, parentSiblings;

        if (!header && !nav) {
          return;
        }

        // Option 1 - Check if we are below the Desktop Breakpoint, before
        // applying the class
        if (window.innerWidth > desktopBreakpoint) {
          header.classList.remove(menuClasses.mainWrapper)
        }

        // Option 2 - If Option 1 fails, we monitor for window resizing.
        const observer = new ResizeObserver(entries => {
          const headerEl = entries[0];
          const notInDesktop = headerEl.contentRect.width < desktopBreakpoint;
          notInDesktop ? header.classList.add(menuClasses.mainWrapper) : header.classList.remove(menuClasses.mainWrapper)
        });


        /**
         * Handles class assignments to clicked button, parent <Nav> and
         * Siblings of button clicked
         * @param {string} operation Accepts one of two parameters; "add" or
         *     "remove".
         */
        const toggleClasses = (operation) => {
          if (!typeof operation === "string" && (!operation === "add" || !operation === "remove")) {
            return;
          }

          if (operation === "add") {
            parentBtn.classList.add(menuClasses.itemOpen);
            nav.classList.add(menuClasses.activeChild);
            parentSiblings = Array.from(nav.querySelectorAll(".usa-nav__primary-item")).filter(el => !el.classList.contains(menuClasses.itemOpen));
            parentSiblings.forEach(el => el.classList.add(menuClasses.itemHidden));
          }

          if (operation === "remove") {
            parentBtn.classList.remove(menuClasses.itemOpen);
            nav.classList.remove(menuClasses.activeChild);
            parentSiblings = Array.from(nav.querySelectorAll(".usa-nav__primary-item")).filter(el => !el.classList.contains(menuClasses.itemOpen));
            parentSiblings.forEach(el => el.classList.remove(menuClasses.itemHidden));
            parentBtn = nestedBtn = null;
          }

        }
        //If left open, close and reset menu to menu_level_0
        const resetOpenMenu = () => {
          if (!!parentBtn === false || !!nestedBtn === false) {
            return
          }
          nestedBtn.setAttribute('aria-expanded', 'false');
          toggleClasses("remove");
        }

        const triggerSlider = (evt) => {

          parentBtn = evt.target.closest(".usa-nav__primary-item");
          nestedBtn = parentBtn ? parentBtn.querySelector(".usa-accordion__button") : null;

          if (!parentBtn || !nestedBtn) {
            return;
          }

          if (nestedBtn.getAttribute("aria-expanded") === "false") {
            toggleClasses("add")
            state.menuOpen = true;
          }
          if (nestedBtn.getAttribute("aria-expanded") === "true") {
            toggleClasses("remove");
            state.menuOpen = false
          }

        }


        observer.observe(header);
        menuBtn.addEventListener('click', resetOpenMenu);
        nav.addEventListener('click', (evt) => {
          if (evt.target === evt.currentTarget) {
            resetOpenMenu();
          }
          else {
            triggerSlider(evt);
          }
        });

      });

    }
  }

})(jQuery);