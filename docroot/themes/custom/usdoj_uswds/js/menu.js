'use strict';
(function ($) {
  Drupal.behaviors.portMenuLinks = {
    attach: function (context, settings) {

      once('portMenuLinks', 'html', context).forEach(function (element) {

        const primaryMenu = document.querySelector('HEADER .usa-nav');
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
        const regionHeader = header.querySelector(".region-header");
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
            state.menuOpen = false;
          }
          if (nestedBtn.getAttribute("aria-expanded") === "true") {
            toggleClasses("remove");
            state.menuOpen = false
          }

        }


        observer.observe(header);
        menuBtn.addEventListener('click', resetOpenMenu);
        regionHeader.addEventListener('click', (evt) => {
          if ((evt.target === evt.currentTarget) && (menuBtn.checked === true)) {
            menuBtn.checked = false;
            resetOpenMenu();
          }
        });
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
  Drupal.behaviors.primaryMenuAsAuxiliary = {
    attach: function (context, settings) {

      once('primaryMenuAsAuxiliary', 'html', context).forEach(function (element) {

        const htmlDoc = context.querySelector("html");
        const menus = context.querySelectorAll(".usaDoj-menu");
        const overlay = context.querySelector(".usdoj_overlay");
        const classes = {
          menuItemExpanded: 'menuItem__expanded',
          menuItemHidden: 'menuItem__hidden',
        }
        menus.forEach(menu => initMenu(menu))


        function initMenu(activeMenu) {
          let menuLvl_0 = [];
          let filteredMenuLvl_0 = [];
          let activeMenuItem, activeButton;
          const menuNeedsOverlay = !activeMenu.classList.contains("no-overlay");
          const attachedUtilityMenu = activeMenu.querySelector(".mobile-utils")
          let attachedElements = [
              attachedUtilityMenu,
          ]

          const state = {
            menuBtnExpanded: false, // menuBtnExpanded === menuVisible
            menuItemExpanded: false,
          }
          const menuBtn = activeMenu.querySelector('.menu-btn');
          const menuWrapper = activeMenu.querySelector('.menu-wrapper')
          const closureTriggers = [
            //Additional elements which allow closing of Menu
            menuWrapper,
            overlay
          ]

          const updateState = (stateSlice) => {
            if (stateSlice === "menuBtnExpanded") {
              menuBtn.getAttribute('aria-expanded') === "true" ? state.menuBtnExpanded = true : state.menuBtnExpanded = false;
            }
            if (stateSlice === "menuItemExpanded") {
              activeButton.getAttribute('aria-expanded') === "true" ? state.menuBtnExpanded = true : state.menuBtnExpanded = false;
            }
            stateListeners();
          }

          const stateListeners = () => {
            if (state.menuBtnExpanded) {
              menuBtn.setAttribute('aria-expanded',"true"); //we reset aria-attribute just in-case another el. triggers a state change
              toggleMenuEl()
              toggleOverlay()
            } else {
              menuBtn.setAttribute('aria-expanded',"false");
              toggleMenuEl()
              toggleOverlay()
              clearClasses();
            }

            if(state.menuItemExpanded) {
              attachedElements.forEach(el => el.classList.add(classes.menuItemHidden))
            } else {
              attachedElements.forEach(el=> el.classList.remove(classes.menuItemHidden))
            }


          }

          const toggleMenuEl = () => { menuWrapper.hidden = !state.menuBtnExpanded;}

          const toggleOverlay = () => {
            if (!menuNeedsOverlay) return;

            if (state.menuBtnExpanded) {
              overlay.classList.add("show")
            }
            else {
              overlay.classList.remove("show");
            }
          }

          const toggleAttachments = () => {
            if (attachedElements.length === 0) return
            if(state.menuItemExpanded) {
              attachedElements.forEach(el => el.classList.add(classes.menuItemHidden))
            }else{
              attachedElements.forEach(el=> el.classList.remove(classes.menuItemHidden))
            }
          }

          const toggleMenuClasses = () => {

            if (!activeButton) return;

            if (activeButton.getAttribute('aria-expanded')==="true") {
              filteredMenuLvl_0.forEach(item => item.classList.remove(classes.menuItemHidden));
              activeMenuItem.classList.remove(classes.menuItemExpanded);
              state.menuItemExpanded = false;
              toggleAttachments();
            }else{
              filteredMenuLvl_0.forEach(item => item.classList.add(classes.menuItemHidden));
              activeMenuItem.classList.add(classes.menuItemExpanded);
              state.menuItemExpanded = true;
              toggleAttachments();
            }
          }

          const mimicSlide = (evt) => {
            //select the clicked button
            activeMenuItem = evt.target.closest('.usa-nav__primary-item');
            if(!activeMenuItem) return;

            //select the nested button that controls the dropdown Menu
            activeButton = activeMenuItem.querySelector(':scope > .usa-accordion__button');
            if(!activeButton) return;

            menuLvl_0 = menuWrapper.querySelectorAll('.menu_level__0 > .usa-nav__primary-item');
            filteredMenuLvl_0 = [...menuLvl_0].filter(item => item !== activeMenuItem);

            toggleMenuClasses()

          }

          const clearClasses = () => {
            if (!activeMenuItem) return;
            activeMenuItem.classList.remove(classes.menuItemExpanded);
            filteredMenuLvl_0.forEach(item => item.classList.remove(classes.menuItemHidden));
          }

          const resetAndClose = (evt) => {
            if (evt.target !== evt.currentTarget) return;

            menuBtn.setAttribute('aria-expanded', 'false');
            updateState('menuBtnExpanded');


          }

          menuBtn.addEventListener('click', function() {
            if (this.getAttribute('aria-expanded')==='false') {
              this.setAttribute('aria-expanded','true')
              updateState("menuBtnExpanded");
              attachedElements.forEach(el=> el.classList.remove(classes.menuItemHidden))
            } else {
              this.setAttribute('aria-expanded','false')
              updateState("menuBtnExpanded");
            }
          })
          activeMenu.addEventListener('click', mimicSlide)
          closureTriggers.forEach(item => item.addEventListener('click', resetAndClose));
        }
      });
    }
  }

})(jQuery);