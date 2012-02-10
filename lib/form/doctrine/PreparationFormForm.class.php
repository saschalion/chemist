<?php

/**
 * PreparationForm form.
 *
 * @package    chemist
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PreparationFormForm extends BasePreparationFormForm
{
  public function configure()
  {
      unset(
      $this['created_at'], $this['updated_at'],
      $this['expires_at'], $this['is_activated']
     );
  }
}
