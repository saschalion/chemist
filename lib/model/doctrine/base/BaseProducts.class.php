<?php

/**
 * BaseProducts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $purchase_name
 * @property integer $preparation_form_id
 * @property string $approach_usage
 * @property string $type
 * @property string $code
 * @property string $action_substance
 * @property integer $producer_id
 * @property PreparationForm $PreparationForm
 * @property Producer $Producer
 * 
 * @method string          getPurchaseName()        Returns the current record's "purchase_name" value
 * @method integer         getPreparationFormId()   Returns the current record's "preparation_form_id" value
 * @method string          getApproachUsage()       Returns the current record's "approach_usage" value
 * @method string          getType()                Returns the current record's "type" value
 * @method string          getCode()                Returns the current record's "code" value
 * @method string          getActionSubstance()     Returns the current record's "action_substance" value
 * @method integer         getProducerId()          Returns the current record's "producer_id" value
 * @method PreparationForm getPreparationForm()     Returns the current record's "PreparationForm" value
 * @method Producer        getProducer()            Returns the current record's "Producer" value
 * @method Products        setPurchaseName()        Sets the current record's "purchase_name" value
 * @method Products        setPreparationFormId()   Sets the current record's "preparation_form_id" value
 * @method Products        setApproachUsage()       Sets the current record's "approach_usage" value
 * @method Products        setType()                Sets the current record's "type" value
 * @method Products        setCode()                Sets the current record's "code" value
 * @method Products        setActionSubstance()     Sets the current record's "action_substance" value
 * @method Products        setProducerId()          Sets the current record's "producer_id" value
 * @method Products        setPreparationForm()     Sets the current record's "PreparationForm" value
 * @method Products        setProducer()            Sets the current record's "Producer" value
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
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('preparation_form_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('approach_usage', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('code', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('action_substance', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('producer_id', 'integer', null, array(
             'type' => 'integer',
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

        $this->hasOne('Producer', array(
             'local' => 'producer_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}