<?php

/**
 * @file
 * Provide Views data for Search API Location.
 */

use Drupal\search_api\Entity\Index;

/**
 * Implements hook_views_data_alter().
 */
function search_api_location_views_views_data_alter(&$data) {
  /** @var \Drupal\search_api\IndexInterface $index */
  foreach (Index::loadMultiple() as $index) {
    $table = &$data['search_api_index_' . $index->id()];
    /** @var \Drupal\search_api\Item\FieldInterface $field */
    foreach ($index->getFields() as $field_id => $field) {
      if ($field->getType() == 'location') {
        // Adding filter to location fields.
        $table[$field_id]['filter']['title'] = $field->getLabel();
        $table[$field_id]['filter']['id'] = 'search_api_location';
        $table[$field_id]['filter']['help'] = $field->getDescription();
      }
    }
  }
}