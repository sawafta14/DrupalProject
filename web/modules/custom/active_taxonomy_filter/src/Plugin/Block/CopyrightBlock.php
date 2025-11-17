<?php

namespace Drupal\active_taxonomy_filter\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "copyright_block",
 *   admin_label = @Translation("Copyright Block"),
 *   category = @Translation("Custom")
 * )
 */
class CopyrightBlock extends BlockBase {

  public function build() {
    $year = date('Y');

    return [
      '#markup' => "© {$year} TechCo",
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

}
