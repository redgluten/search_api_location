<?php

namespace Drupal\search_api_location\Plugin\search_api_location\location_input;

use Drupal\Core\Form\FormStateInterface;
use Drupal\search_api_location\LocationInput\LocationInputPluginBase;

/**
 * Represents the Raw Location Input.
 *
 * @LocationInput(
 *   id = "raw",
 *   label = @Translation("Raw input"),
 *   description = @Translation("Let user enter a location as decimal latitude and longitude, separated by a comma."),
 * )
 */
class Raw extends LocationInputPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getParsedInput($input) {
    $input['value'] = trim($input['value']);
    return preg_match('/^[+-]?[0-9]+(?:\.[0-9]+)?,[+-]?[0-9]+(?:\.[0-9]+)?$/', $input['value']) ? $input['value'] : NULL;
  }

  /**
   * Form validation handler.
   *
   * @param array $form
   *   An associative array containing the structure of the plugin form as built
   *   by static::buildConfigurationForm().
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the complete form.
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement validateConfigurationForm() method.
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the plugin form as built
   *   by static::buildConfigurationForm().
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the complete form.
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitConfigurationForm() method.
  }

}
