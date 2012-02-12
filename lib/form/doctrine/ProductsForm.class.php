<?php

/**
 * Products form.
 *
 * @package    chemist
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductsForm extends BaseProductsForm
{
  public function configure()
  {
    unset(
        $this['created_at'], $this['updated_at'],
        $this['expires_at'], $this['is_activated']
    );
    $this->widgetSchema['preparation_form_id']  = new sfWidgetFormChoice(array(
        'choices'          => array(),
        'renderer_class'   => 'sfWidgetFormJQueryAutocompleter',
        'renderer_options' => array('url' => '/backend_dev.php/PreparationForm/autocomplete', 'config' => '{ multiple:true }'),
    ));

    $this->widgetSchema['approach_usage']  = new sfWidgetFormChoice(array(
        'choices'          => array(),
        'renderer_class'   => 'sfWidgetFormJQueryAutocompleter',
        'renderer_options' => array('url' => '/backend_dev.php/PreparationForm/autocomplete', 'config' => '{ multiple:true }'),
    ));

    $this->widgetSchema['approach_usage'] = new sfWidgetFormTextarea(array(
    ));

    $this->widgetSchema->setLabels(array(
          'purchase_name' => 'Название препарата',
          'preparation_form_id' => 'Форма препарата',
          'approach_usage' => 'Способ применения и дозы',
          'type' => 'Тип',
          'code' => 'Код',
          'action_substance' => 'Действие вещества',
          'producer_id' => 'Производитель'
    ));
  }
}