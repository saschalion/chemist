<?php

/**
 * Reports form.
 *
 * @package    chemist
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReportsForm extends BaseReportsForm
{
  public function configure()
  {
      $this->widgetSchema['product_id']  = new sfWidgetFormChoice(array(
        'choices'          => array(),
        'renderer_class'   => 'sfWidgetFormJQueryAutocompleter',
        'renderer_options' => array('url' => '/backend_dev.php/products/autocomplete', 'config' => '{ multiple:true }'),
    ));
  }
}
