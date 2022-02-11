<?php

/**
 * @file
 * Theme and preprocess functions for paragraph.
 */

/**
 * Paragraph include code.
 */

 function usdoj_uswds_theme_suggestions_paragraph_alter(&$suggestions, &$vars, $hook) {
  $paragraph = $vars['elements']['#paragraph'];
  $parent = $paragraph->getParentEntity();
  if ($parent) {
    $suggestions[] = 'paragraph__' . $parent->bundle() . '__' . $paragraph->bundle();
  }  
 }
