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
      'type'        => new sfWidgetFormFilterInput(),
      'company'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'category'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'logo'        => new sfWidgetFormFilterInput(),
      'url'         => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'among'       => new sfWidgetFormFilterInput(),
      'token'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'type'        => new sfValidatorPass(array('required' => false)),
      'company'     => new sfValidatorPass(array('required' => false)),
      'category'    => new sfValidatorPass(array('required' => false)),
      'logo'        => new sfValidatorPass(array('required' => false)),
      'url'         => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'among'       => new sfValidatorPass(array('required' => false)),
      'token'       => new sfValidatorPass(array('required' => false)),
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
      'id'          => 'Number',
      'type'        => 'Text',
      'company'     => 'Text',
      'category'    => 'Text',
      'logo'        => 'Text',
      'url'         => 'Text',
      'description' => 'Text',
      'among'       => 'Text',
      'token'       => 'Text',
    );
  }
}
