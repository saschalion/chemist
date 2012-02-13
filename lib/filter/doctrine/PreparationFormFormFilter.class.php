<?php

/**
 * PreparationForm filter form.
 *
 * @package    chemist
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PreparationFormFormFilter extends BasePreparationFormFormFilter
{
  public function configure()
  {
      $this->widgetSchema->setLabels(
        array(
            'name' => 'Форма препарата'
        )
    );
  }
}
