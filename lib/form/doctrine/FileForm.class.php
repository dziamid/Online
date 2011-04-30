<?php

/**
 * File form.
 *
 * @package    www
 * @subpackage form
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FileForm extends BaseFileForm
{
  public function configure()
  {
    $this->useFields(array('name', 'is_public'));
  }
  
  public function doSave($conn = null)
  {
    $this->getObject()->setUserId(sfContext::getInstance()->getUser()->getId());
    parent::doSave();
  }
}
