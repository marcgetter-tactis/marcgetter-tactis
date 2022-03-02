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
  // Get uri segments from the URL.
  $uri_segments = usdoj_utilities_get_uri_segments();

  if (is_array($uri_segments) && count($uri_segments)) {

    switch ($uri_segments[0]) {
      case 'news':
        // Determine index of node type.
        $uri_segment_index = count($uri_segments) - 1;

        // Get form title based on node type.
        $form_title = usdoj_utilities_get_node_type_display_name($uri_segments[$uri_segment_index], 'plural');

        // Set var to be consumed by exposed form template.
        $variables['views_exposed_form']['title'] = $form_title;

        break;
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
