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
    return array(  '_save_and_add' =>   array(    'label' => 'Сохранить и добавить',  ),  '_save' =>   array(    'label' => 'Сохранить',  ),  '_edit' =>   array(    'label' => 'Редактировать',  ),  '_list' =>   array(    'label' => 'Назад к списку',  ),  '_delete' =>   array(    'label' => 'Удалить',  ),  '_new' =>   array(    'label' => 'Добавить',  ),);
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
    return '%%id%% - %%purchase_name%% - %%approach_usage%% - %%type%% - %%code%% - %%action_substance%% - %%available%% - %%charge%% - %%preparation_form_id%% - %%producer_id%% - %%created_at%% - %%updated_at%%';
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
    return 'Добавить препарат';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'purchase_name',  1 => 'preparation_form_id',  2 => 'code',  3 => 'type',  4 => 'action_substance',  5 => 'producer_id',);
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
    return array(  0 => 'id',  1 => 'purchase_name',  2 => 'approach_usage',  3 => 'type',  4 => 'code',  5 => 'action_substance',  6 => 'available',  7 => 'charge',  8 => 'preparation_form_id',  9 => 'producer_id',  10 => 'created_at',  11 => 'updated_at',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'purchase_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'approach_usage' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'code' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'action_substance' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'available' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'charge' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'preparation_form_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'producer_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'purchase_name' => array(),
      'approach_usage' => array(),
      'type' => array(),
      'code' => array(),
      'action_substance' => array(),
      'available' => array(),
      'charge' => array(),
      'preparation_form_id' => array(),
      'producer_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'purchase_name' => array(),
      'approach_usage' => array(),
      'type' => array(),
      'code' => array(),
      'action_substance' => array(),
      'available' => array(),
      'charge' => array(),
      'preparation_form_id' => array(),
      'producer_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'purchase_name' => array(),
      'approach_usage' => array(),
      'type' => array(),
      'code' => array(),
      'action_substance' => array(),
      'available' => array(),
      'charge' => array(),
      'preparation_form_id' => array(),
      'producer_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'purchase_name' => array(),
      'approach_usage' => array(),
      'type' => array(),
      'code' => array(),
      'action_substance' => array(),
      'available' => array(),
      'charge' => array(),
      'preparation_form_id' => array(),
      'producer_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'purchase_name' => array(),
      'approach_usage' => array(),
      'type' => array(),
      'code' => array(),
      'action_substance' => array(),
      'available' => array(),
      'charge' => array(),
      'preparation_form_id' => array(),
      'producer_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
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
