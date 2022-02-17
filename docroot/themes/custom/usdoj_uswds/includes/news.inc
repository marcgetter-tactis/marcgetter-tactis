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
