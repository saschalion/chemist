<?php

/**
 * Products filter form base class.
 *
 * @package    chemist
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'purchase_name'       => new sfWidgetFormFilterInput(),
      'preparation_form_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PreparationForm'), 'add_empty' => true)),
      'type'                => new sfWidgetFormFilterInput(),
      'code'                => new sfWidgetFormFilterInput(),
      'action_substance'    => new sfWidgetFormFilterInput(),
      'producer_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producer'), 'add_empty' => true)),
      'availability'        => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'purchase_name'       => new sfValidatorPass(array('required' => false)),
      'preparation_form_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PreparationForm'), 'column' => 'id')),
      'type'                => new sfValidatorPass(array('required' => false)),
      'code'                => new sfValidatorPass(array('required' => false)),
      'action_substance'    => new sfValidatorPass(array('required' => false)),
      'producer_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Producer'), 'column' => 'id')),
      'availability'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('products_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Products';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'purchase_name'       => 'Text',
      'preparation_form_id' => 'ForeignKey',
      'type'                => 'Text',
      'code'                => 'Text',
      'action_substance'    => 'Text',
      'producer_id'         => 'ForeignKey',
      'availability'        => 'Number',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
