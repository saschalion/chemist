<?php

/**
 * products module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage products
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProductsGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%type%% - %%company%% - %%category%% - %%logo%% - %%url%% - %%description%% - %%among%% - %%token%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Products List';
  }

  public function getEditTitle()
  {
    return 'Edit Products';
  }

  public function getNewTitle()
  {
    return 'New Products';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'type',  2 => 'company',  3 => 'category',  4 => 'logo',  5 => 'url',  6 => 'description',  7 => 'among',  8 => 'token',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'company' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'category' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'logo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'url' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'among' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'token' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'category' => array(),
      'logo' => array(),
      'url' => array(),
      'description' => array(),
      'among' => array(),
      'token' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'category' => array(),
      'logo' => array(),
      'url' => array(),
      'description' => array(),
      'among' => array(),
      'token' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'category' => array(),
      'logo' => array(),
      'url' => array(),
      'description' => array(),
      'among' => array(),
      'token' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'category' => array(),
      'logo' => array(),
      'url' => array(),
      'description' => array(),
      'among' => array(),
      'token' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'category' => array(),
      'logo' => array(),
      'url' => array(),
      'description' => array(),
      'among' => array(),
      'token' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ProductsForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ProductsFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
