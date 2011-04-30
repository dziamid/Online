<?php

/**
 * home componenets.
 * 
 */
class homeComponents extends sfComponents
{
  public function executeMenu(sfWebRequest $request)
  {
    $this->routes = sfConfig::get('app_menu');
    $this->currentUri = $this->getContext()->getRouting()->getCurrentInternalUri();
  }
}
