<?php

require_once dirname(__FILE__).'/../../sfGuardComponents.class.php';

/**
 * sfGuardUser components
 *
 */
class sfGuardUserComponents extends sfGuardComponents 
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
