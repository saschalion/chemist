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
  }
}