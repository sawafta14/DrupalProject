<?php

namespace Drupal\active_taxonomy_filter\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class NewsController extends ControllerBase {

  public function newsPage() {

    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'news')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->accessCheck(FALSE)
      ->execute();

    $nodes = Node::loadMultiple($nids);

    $items = [];

    foreach ($nodes as $node) {
      $items[] = [
        'title' => $node->label(),
        'url'   => $node->toUrl()->toString(),
        'date'  => $node->getCreatedTime(),
      ];
    }

    return [
      '#theme' => 'news_landing_page',
      '#items' => $items,
    ];
  }

}
