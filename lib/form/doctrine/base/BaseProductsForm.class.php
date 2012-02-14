<?php

/**
 * Products form base class.
 *
 * @method Products getObject() Returns the current form's model object
 *
 * @package    chemist
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'purchase_name'       => new sfWidgetFormInputText(),
      'approach_usage'      => new sfWidgetFormTextarea(),
      'type'                => new sfWidgetFormInputText(),
      'code'                => new sfWidgetFormInputText(),
      'action_substance'    => new sfWidgetFormInputText(),
      'available'           => new sfWidgetFormInputText(),
      'preparation_form_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PreparationForm'), 'add_empty' => false)),
      'producer_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producer'), 'add_empty' => true)),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'purchase_name'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'approach_usage'      => new sfValidatorString(array('required' => false)),
      'type'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'code'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'action_substance'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'available'           => new sfValidatorInteger(array('required' => false)),
      'preparation_form_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PreparationForm'))),
      'producer_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Producer'), 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Products', 'column' => array('purchase_name')))
    );

    $this->widgetSchema->setNameFormat('products[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Products';
  }

}
