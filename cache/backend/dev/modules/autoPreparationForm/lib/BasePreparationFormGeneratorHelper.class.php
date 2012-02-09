<?php

/**
 * PreparationForm module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage PreparationForm
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePreparationFormGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'preparation_form' : 'preparation_form_'.$action;
  }
}
