<?php

/**
 * home actions.
 *
 * @package    www
 * @subpackage home
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

  }
  public function executeError404(sfWebRequest $request)
  {
    $culture = $this->getUser()->getCulture();
    $template = sprintf('error404%s', strtolower($culture));
    $path = sprintf('%s/templates/%sSuccess.php', sfContext::getInstance()->getModuleDirectory(), $template);
    if (file_exists($path))
    {
      $this->setTemplate($template);
    }
  }
}
