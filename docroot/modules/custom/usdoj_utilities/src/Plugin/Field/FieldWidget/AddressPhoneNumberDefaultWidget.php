<?php

namespace Drupal\usdoj_utilities\Plugin\Field\FieldWidget;

use Drupal\address\Plugin\Field\FieldWidget\AddressDefaultWidget;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Widget for Address Phone Number custom field.
 *
 * @FieldWidget(
 *   id = "address_phone_number_default",
 *   label = @Translation("Address with Phonenumber"),
 *   description = @Translation("An contact text field with an associated Address."),
 *   field_types = {
 *     "address_phone_number_item"
 *   }
 * )
 */
class AddressPhoneNumberDefaultWidget extends AddressDefaultWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {

    $widget = parent::formElement($items, $delta, $element, $form, $form_state);
    $widget['address']['#type'] = 'address_phone_number_item';
    $widget['address']['locality'] = [
      '#weight' => 1,
    ];
    $widget['address']['address_phonenumber'] = [
      '#title' => $this->t('Phone Number'),
      '#type' => 'textfield',
      '#required' => FALSE,
      '#default_value' => isset($items[$delta]->address_phonenumber) ?? NULL,
      '#weight' => 10,
      '#states' => [
        'invisible' => [
          ':input[name="payment_information[billing_information][field_contact_address][0][address][country_code]"]' => ['value' => ''],
        ],
      ],
    ];
    return $widget;
  }

}
