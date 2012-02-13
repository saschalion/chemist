<?php

/**
 * products module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage products
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProductsGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'products' : 'products_'.$action;
  }
}
