<?php

use Drupal\techco_setup\InstallHelper;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\taxonomy\Entity\Term;
use Drupal\pathauto\Entity\PathautoPattern;

/**
 * يبني أنواع المحتوى والحقول والتصنيفات وImage style وPathauto.
 */
function techco_setup_build_all(): void {
  // 1) Content types
  InstallHelper::ensureType('service', 'Service');
  InstallHelper::ensureType('news', 'News');
  InstallHelper::ensureType('server_plan', 'Server Plan');
  InstallHelper::ensureType('page', 'Page');
  InstallHelper::ensureType('hero_slide', 'Hero Slide');

  // 2) Fields
  // Service
  InstallHelper::ensureField('service', 'field_summary', 'Summary', 'text_long');
  InstallHelper::ensureField('service', 'field_image', 'Image', 'image');
  InstallHelper::ensureField('service', 'field_is_published', 'Published', 'boolean');

  // News
  InstallHelper::ensureField('news', 'field_summary', 'Summary', 'text_long');
  InstallHelper::ensureField('news', 'field_cover', 'Cover Image', 'image');
  InstallHelper::ensureField('news', 'field_published_at', 'Published At', 'datetime', [], ['datetime_type' => 'datetime']);

  // Page
  InstallHelper::ensureField('page', 'body', 'Body', 'text_with_summary');
  InstallHelper::ensureField('page', 'field_hero_image', 'Hero Image', 'image');

  // Server Plan
  InstallHelper::ensureField('server_plan', 'field_price', 'Price', 'decimal', ['settings' => ['precision' => 10, 'scale' => 2]]);
  InstallHelper::ensureField('server_plan', 'field_period', 'Period', 'list_string', [
    'settings' => ['allowed_values' => ['month' => 'Month', 'year' => 'Year']]
  ]);
  InstallHelper::ensureField('server_plan', 'field_cpu', 'CPU', 'string');
  InstallHelper::ensureField('server_plan', 'field_ram', 'RAM', 'string');
  InstallHelper::ensureField('server_plan', 'field_storage', 'Storage', 'string');
  InstallHelper::ensureField('server_plan', 'field_bandwidth', 'Bandwidth', 'string');
  InstallHelper::ensureField('server_plan', 'field_features', 'Features', 'text_long');
  InstallHelper::ensureField('server_plan', 'field_is_featured', 'Featured', 'boolean');
  InstallHelper::ensureField('server_plan', 'field_is_active', 'Active', 'boolean');

  // Hero Slide
  InstallHelper::ensureField('hero_slide', 'field_headline', 'Headline', 'string');
  InstallHelper::ensureField('hero_slide', 'field_subtext', 'Subtext', 'string');
  InstallHelper::ensureField('hero_slide', 'field_cta_text', 'CTA Text', 'string');
  InstallHelper::ensureField('hero_slide', 'field_cta_url', 'CTA URL', 'link');
  InstallHelper::ensureField('hero_slide', 'field_image', 'Image', 'image');
  InstallHelper::ensureField('hero_slide', 'field_sort', 'Sort Order', 'integer');
  InstallHelper::ensureField('hero_slide', 'field_is_active', 'Active', 'boolean');

  // 3) Taxonomy
  if (!Vocabulary::load('categories')) {
    Vocabulary::create(['vid' => 'categories', 'name' => 'Categories'])->save();
  }
  // entity_reference settings الصحيحة
  $eref_settings = [
    'handler' => 'default:taxonomy_term',
    'handler_settings' => ['target_bundles' => ['categories' => 'categories']],
  ];
  InstallHelper::ensureField('news', 'field_category', 'Category', 'entity_reference', [], $eref_settings);
  InstallHelper::ensureField('service', 'field_category', 'Category', 'entity_reference', [], $eref_settings);

  foreach (['Hosting','Updates'] as $name) {
    $exists = \Drupal::entityTypeManager()->getStorage('taxonomy_term')
      ->loadByProperties(['vid' => 'categories', 'name' => $name]);
    if (!$exists) {
      Term::create(['vid' => 'categories', 'name' => $name])->save();
    }
  }

  // 4) Image style
  InstallHelper::ensureImageStyle();

  // 5) Pathauto patterns (باستخدام entity_bundle:node بدل node_type)
  $uuid = \Drupal::service('uuid');
  $defs = [
    ['id' => 'pathauto_service',     'label' => 'Service',     'bundle' => 'service',     'pattern' => '/service/[node:title]'],
    ['id' => 'pathauto_news',        'label' => 'News',        'bundle' => 'news',        'pattern' => '/news/[node:title]'],
    ['id' => 'pathauto_server_plan', 'label' => 'Server Plan', 'bundle' => 'server_plan', 'pattern' => '/server-plans/[node:title]'],
    ['id' => 'pathauto_page',        'label' => 'Page',        'bundle' => 'page',        'pattern' => '/page/[node:title]'],
  ];

  foreach ($defs as $d) {
    $existing = \Drupal\pathauto\Entity\PathautoPattern::load($d['id']);
    if ($existing) {
      $existing->delete();
    }
    PathautoPattern::create([
      'id' => $d['id'],
      'label' => $d['label'],
      'type' => 'canonical_entities:node',
      'pattern' => $d['pattern'],
      'selection_criteria' => [
        $uuid->generate() => [
          'id' => 'entity_bundle:node',
          'bundles' => [$d['bundle'] => $d['bundle']],
          'negate' => FALSE,
          'context_mapping' => ['entity' => 'node'],
        ],
      ],
    ])->save();
  }
}
