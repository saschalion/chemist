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
  
    public function preExecute()
  {
    $this->configuration = new reportsGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new reportsGeneratorHelper();

    parent::preExecute();
    
        $this->getResponse()->addJavascript('/js/jquery-1.4.2.min.js', 'first');
        $this->getResponse()->addJavascript('/js/jquery.json-2.2.js', 'last');
  }
}
