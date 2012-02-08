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
      'id'          => new sfWidgetFormInputHidden(),
      'type'        => new sfWidgetFormInputText(),
      'company'     => new sfWidgetFormInputText(),
      'category'    => new sfWidgetFormInputText(),
      'logo'        => new sfWidgetFormInputText(),
      'url'         => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'among'       => new sfWidgetFormInputText(),
      'token'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'type'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'company'     => new sfValidatorString(array('max_length' => 255)),
      'category'    => new sfValidatorString(array('max_length' => 255)),
      'logo'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'among'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'token'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Products', 'column' => array('token')))
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
