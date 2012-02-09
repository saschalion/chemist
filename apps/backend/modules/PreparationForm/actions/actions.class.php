<?php

require_once dirname(__FILE__).'/../lib/PreparationFormGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/PreparationFormGeneratorHelper.class.php';

/**
 * PreparationForm actions.
 *
 * @package    chemist
 * @subpackage PreparationForm
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PreparationFormActions extends autoPreparationFormActions
{
      public function executeAutocomplete($request)
  { 
    $this->getResponse()->setContentType('application/json');
 
    $q = "%" . $request->getParameter('q') . "%";
    
    $limit = $request->getParameter('limit');
    
    // FIXME: use $limit
    $dql = Doctrine_Query::create()
         ->from('PreparationForm p')
    		 ->where('p.name LIKE ? OR p.name LIKE ?', array($q, $q));
    $this->rows = $dql->fetchArray();

    $persons = array();
    foreach ($this->rows as $row)
    {
      $persons[$row['id']] = (string) $row['name'];
    }
  
    return $this->renderText(json_encode($persons));
  }
}
