<?php

namespace Drupal\active_taxonomy_filter\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\taxonomy\Entity\Term;

/**
 * @Block(
 *   id = "active_taxonomy_terms_block",
 *   admin_label = @Translation("Active Taxonomy Terms"),
 *   category = @Translation("Custom")
 * )
 */
class ActiveTaxonomyTermsBlock extends BlockBase {

  public function build() {
    $items = [];

    $taxonomy_terms = \Drupal::entityTypeManager()
      ->getStorage('taxonomy_term')
      ->loadTree('show_on');

    foreach ($taxonomy_terms as $term) {
      $term_obj = Term::load($term->tid);

      if (!$term_obj || !$term_obj->hasField('field_active')) {
        continue;
      }

      $active_value = $term_obj->get('field_active')->value ?? 0;

      if ($active_value == 1) {
        $items[] = $term->name;
      }
    }

    if (empty($items)) {
      return [
        '#markup' => $this->t('No active terms found.'),
      ];
    }

    return [
      '#theme' => 'item_list',
      '#title' => $this->t('Active Terms'),
      '#items' => $items,
    ];
  }

}
