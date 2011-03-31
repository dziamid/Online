<?php

/**
 * sfGuard components.
 *
 * @package    www
 * @subpackage sfGuard
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardComponents extends sfComponents
{
  public function executeCustomfield()
  {
    list ($formname, $fieldname) = explode('.', $this->name);
    $this->field = $this->form[$formname][$fieldname];
    if (!isset($this->attributes))
    {
      $this->attributes = array();
    }
  }
}
