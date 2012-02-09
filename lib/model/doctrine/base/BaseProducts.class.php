<?php

/**
 * BaseProducts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $purchase_name
 * @property integer $preparation_form_id
 * @property PreparationForm $PreparationForm
 * 
 * @method string          getPurchaseName()        Returns the current record's "purchase_name" value
 * @method integer         getPreparationFormId()   Returns the current record's "preparation_form_id" value
 * @method PreparationForm getPreparationForm()     Returns the current record's "PreparationForm" value
 * @method Products        setPurchaseName()        Sets the current record's "purchase_name" value
 * @method Products        setPreparationFormId()   Sets the current record's "preparation_form_id" value
 * @method Products        setPreparationForm()     Sets the current record's "PreparationForm" value
 * 
 * @package    chemist
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProducts extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('products');
        $this->hasColumn('purchase_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('preparation_form_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));

        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PreparationForm', array(
             'local' => 'preparation_form_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}