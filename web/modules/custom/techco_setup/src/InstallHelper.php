<?php

namespace Drupal\techco_setup;

use Drupal\node\Entity\NodeType;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\image\Entity\ImageStyle;

final class InstallHelper {

  public static function ensureType(string $type, string $label): void {
    if (!NodeType::load($type)) {
      NodeType::create(['type' => $type, 'name' => $label])->save();
    }
  }

  public static function ensureField(
    string $bundle,
    string $field_name,
    string $label,
    string $type,
    array $storage = [],
    array $settings = []
  ): void {
    if (!FieldStorageConfig::loadByName('node', $field_name)) {
      FieldStorageConfig::create([
        'field_name' => $field_name,
        'entity_type' => 'node',
        'type' => $type,
        'cardinality' => $storage['cardinality'] ?? 1,
        'settings' => $storage['settings'] ?? [],
      ])->save();
    }

    if (!FieldConfig::loadByName('node', $bundle, $field_name)) {
      FieldConfig::create([
        'field_name' => $field_name,
        'entity_type' => 'node',
        'bundle' => $bundle,
        'label' => $label,
        'settings' => $settings,
      ])->save();
    }
  }

  public static function ensureImageStyle(): void {
    if (!ImageStyle::load('card')) {
      $style = ImageStyle::create(['name' => 'card', 'label' => 'Card']);
      $style->addImageEffect([
        'id' => 'image_scale_and_crop',
        'data' => ['width' => 800, 'height' => 500],
        'weight' => 0,
      ]);
      $style->save();
    }
  }
}
