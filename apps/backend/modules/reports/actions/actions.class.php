<?php

require_once dirname(__FILE__).'/../lib/reportsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/reportsGeneratorHelper.class.php';

/**
 * reports actions.
 *
 * @package    chemist
 * @subpackage reports
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reportsActions extends autoReportsActions
{
    function funct ()
        {

            $total = ($this->setProducts()->setAvailable()) - ($this->setAmong());
            
            return $total;
        }
}
