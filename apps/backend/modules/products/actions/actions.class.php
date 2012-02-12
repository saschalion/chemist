<?php

require_once dirname(__FILE__).'/../lib/productsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/productsGeneratorHelper.class.php';

/**
 * products actions.
 *
 * @package    chemist
 * @subpackage products
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productsActions extends autoProductsActions
{
    
      public function preExecute()
  {
    $this->configuration = new productsGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new productsGeneratorHelper();

    parent::preExecute();

    $this->getResponse()->addStylesheet('style.css', 'last');
    $this->getResponse()->addStylesheet('highslide.css', 'last');

    $this->getResponse()->addJavascript('/js/popup.js', 'last');
    $this->getResponse()->addJavascript('/js/jquery-1.4.2.min.js', 'first');
  }
    
      public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->products = $this->form->getObject();
    $this->getResponse()->addJavascript('/js/jquery-1.4.2.min.js', 'first');
    $this->getResponse()->addJavascript('/sfFormExtraPlugin/js/jquery.autocompleter.js', 'last');
    $this->getResponse()->addJavascript('/js/jquery.json-2.2.js', 'last');
  }

        public function executeShow(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->products = $this->form->getObject();
  }

      public function executeList(sfWebRequest $request)
  {
        // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    $this->form = $this->configuration->getForm();
    $this->products = $this->form->getObject();
  }
  
}