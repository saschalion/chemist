<?php

/**
 * Products filter form.
 *
 * @package    chemist
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductsFormFilter extends BaseProductsFormFilter
{
  public function configure()
  { 
    $this->widgetSchema['purchase_name'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->widgetSchema['code'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->widgetSchema['type'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->widgetSchema['action_substance'] = new sfWidgetFormFilterInput(array('with_empty' => false));

    $this->widgetSchema->setLabels(
        array(
            'purchase_name' => 'Коммерческое название',
            'preparation_form_id' => 'Форма препарата',
            'code' => 'Код',
            'type' => 'Тип',
            'action_substance' => 'Действие вещества',
            'producer' => 'Производитель'
        )
    );
    
  }
}
