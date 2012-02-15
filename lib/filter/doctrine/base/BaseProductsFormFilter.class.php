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
      'approach_usage'      => new sfWidgetFormFilterInput(),
      'type'                => new sfWidgetFormFilterInput(),
      'code'                => new sfWidgetFormFilterInput(),
      'action_substance'    => new sfWidgetFormFilterInput(),
      'available'           => new sfWidgetFormFilterInput(),
      'charge'              => new sfWidgetFormFilterInput(),
      'preparation_form_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PreparationForm'), 'add_empty' => true)),
      'producer_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producer'), 'add_empty' => true)),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'purchase_name'       => new sfValidatorPass(array('required' => false)),
      'approach_usage'      => new sfValidatorPass(array('required' => false)),
      'type'                => new sfValidatorPass(array('required' => false)),
      'code'                => new sfValidatorPass(array('required' => false)),
      'action_substance'    => new sfValidatorPass(array('required' => false)),
      'available'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'charge'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'preparation_form_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PreparationForm'), 'column' => 'id')),
      'producer_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Producer'), 'column' => 'id')),
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
      'approach_usage'      => 'Text',
      'type'                => 'Text',
      'code'                => 'Text',
      'action_substance'    => 'Text',
      'available'           => 'Number',
      'charge'              => 'Number',
      'preparation_form_id' => 'ForeignKey',
      'producer_id'         => 'ForeignKey',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
