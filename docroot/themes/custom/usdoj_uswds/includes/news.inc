<?php

/**
 * @file
 * Theme and preprocess functions for news.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * News include code.
 */

/**
 * Implements hook_preprocess_views_exposed_form().
 */
function usdoj_uswds_preprocess_views_exposed_form(&$variables) {
  $form_title = "";

  // get this form
  $form = &$variables['form'];

  // get id of this form
  $form_id = $form['form_id'];

  // TODO: get path args from utility function
  $uri_segments = usdoj_utilities_get_uri_segments();

  if (is_array($uri_segments) && count($uri_segments)) {

    switch ($uri_segments[0]) {
      case 'news': {

        if (count($uri_segments) == 1) {
          $form_title = "All News";
        } else {
          $form_title = usdoj_utilities_get_node_type_display_name($uri_segments[1], 'plural');
        }

        $variables['views_exposed_form']['title'] = $form_title;

        break;
      }
    }
  }
}

/**
 * Implements hook_form_alter().
 */
function usdoj_uswds_form_alter(&$form, FormStateInterface $form_state, $form_id) {
  switch ($form_id) {
    case "views_exposed_form":
      switch ($form["#id"]) {
        case 'views-exposed-form-news-page-1':
          // Append extra search cta element to keyword search field.
          $form['search_api_fulltext']['#field_suffix'] = '<a class="button keyword-form">Search</a>';
          // Append caledar icon to start and end dates.
          $form['start_date']['#field_suffix'] = '<img class="filter-primary-darker" src="/themes/custom/usdoj_uswds/assets/img/usa-icons/calendar_today.svg" />';
          $form['end_date']['#field_suffix'] = '<img class="filter-primary-darker" src="/themes/custom/usdoj_uswds/assets/img/usa-icons/calendar_today.svg" />';
          break;
      }
      break;
  }
}
