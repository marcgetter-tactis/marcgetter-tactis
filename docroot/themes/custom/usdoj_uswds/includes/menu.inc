<?php

/**
 * @file
 * Theme and preprocess functions for menu.
 */


function usdoj_uswds_preprocess_menu(&$variables) {
  if (isset($variables['menu_name'])) {

    if ($variables['menu_name'] === 'main') {

      foreach ($variables['items'] as $menuItemKey => $menuItem) {

        if (empty($menuItem["below"])) { $variables['items'][$menuItemKey]['attributes']->addClass(['menu_link_no_children']);};

        if (!empty($menuItem["below"])) {

          $linksWithImagesCount = 0;
          $variables['items'][$menuItemKey]['attributes']->addClass(['menu_link_has_children']);

          foreach ($variables['items'][$menuItemKey]["below"] as $menuItemKeyLv1 => $menuItemLv1) {

            if (isset($menuItemLv1["content"]["field_menu_link_image"][0])) {
              // Class Assignments
              $variables['items'][$menuItemKey]["below"][$menuItemKeyLv1]['attributes']->addClass(['menu_link_has_image']);

              //Variable Assignments
              $variables['items'][$menuItemKey]["below"][$menuItemKeyLv1]['content']['menuLinkHasImage'] = true;
              //We tag each imaged-link, so we can limit the display during rendering
              $variables['items'][$menuItemKey]["below"][$menuItemKeyLv1]['content']['linksWithImagesCount'] = $linksWithImagesCount;

              ++$linksWithImagesCount;

//              if(isset($variables['items'][$menuItemKey]['content']['childMenuLinkHasImage']) and ($variables['items'][$menuItemKey]['content']['childMenuLinkHasImage'] = true )) return;
              $variables['items'][$menuItemKey]['attributes']->addClass('child_menu_link_has_image');
              $variables['items'][$menuItemKey]['content']['childMenuLinkHasImage'] = true;

            }else {

              if($variables['items'][$menuItemKey]["below"][$menuItemKeyLv1]['attributes']->hasClass(['menu_link_has_no_image'])) return;
              $variables['items'][$menuItemKey]["below"][$menuItemKeyLv1]['attributes']->addClass(['menu_link_has_no_image']);

            }

          }
        }
      }
    }
  }
}
