<?php

/**
 * Reports
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    chemist
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Reports extends BaseReports
{
        public function save(Doctrine_Connection $conn = null)
    {            
            
      if ($this->getAmong())
      {
        $this->getProducts()->setAvailable($this->getProducts()->getAvailable() - $this->getAmong());
      }    
      
      return parent::save($conn);
    }
}
