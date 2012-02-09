<?php

/**
 * BaseProducts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $type
 * @property string $company
 * @property string $category
 * @property string $logo
 * @property string $url
 * @property string $description
 * @property string $among
 * @property string $token
 * 
 * @method string   getType()        Returns the current record's "type" value
 * @method string   getCompany()     Returns the current record's "company" value
 * @method string   getCategory()    Returns the current record's "category" value
 * @method string   getLogo()        Returns the current record's "logo" value
 * @method string   getUrl()         Returns the current record's "url" value
 * @method string   getDescription() Returns the current record's "description" value
 * @method string   getAmong()       Returns the current record's "among" value
 * @method string   getToken()       Returns the current record's "token" value
 * @method Products setType()        Sets the current record's "type" value
 * @method Products setCompany()     Sets the current record's "company" value
 * @method Products setCategory()    Sets the current record's "category" value
 * @method Products setLogo()        Sets the current record's "logo" value
 * @method Products setUrl()         Sets the current record's "url" value
 * @method Products setDescription() Sets the current record's "description" value
 * @method Products setAmong()       Sets the current record's "among" value
 * @method Products setToken()       Sets the current record's "token" value
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
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('company', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('category', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('logo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('among', 'string', 6, array(
             'type' => 'string',
             'length' => 6,
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}