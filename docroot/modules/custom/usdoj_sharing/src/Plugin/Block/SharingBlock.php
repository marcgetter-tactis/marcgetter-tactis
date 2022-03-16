<?php

namespace Drupal\usdoj_sharing\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\URL;
use Symfony\Cmf\Component\Routing\RouteObjectInterface;

/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *   id = "sharing_block",
 *   admin_label = @Translation("Sharing Block")
 * )
 */
class SharingBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $url = Url::fromRoute('<current>');
    // phpcs:ignore
    $request = \Drupal::request();
    if ($route = $request->attributes->get(RouteObjectInterface::ROUTE_OBJECT)) {
      // phpcs:ignore
      $title = \Drupal::service('title_resolver')->getTitle($request, $route);
    }

    return [
      '#theme' => 'sharing_block',
      '#url' => $url,
      '#title' => $title,
    ];
  }

}
