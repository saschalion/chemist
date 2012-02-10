<?php

/**
 * BaseProducer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Producer
 * 
 * @method string              getName()     Returns the current record's "name" value
 * @method Doctrine_Collection getProducer() Returns the current record's "Producer" collection
 * @method Producer            setName()     Sets the current record's "name" value
 * @method Producer            setProducer() Sets the current record's "Producer" collection
 * 
 * @package    chemist
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProducer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('producer');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));

        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Products as Producer', array(
             'local' => 'id',
             'foreign' => 'producer_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}