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
    $this->setWidget('name', new sfWidgetFormInputFileEditable(array(
      'file_src' => '/uploads/' . $this->getObject()->getName(),
      'edit_mode' => false,
      'with_delete' => false,
    )));
    
    $this->setValidator('name', new sfValidatorFile(array(
      'path' => sfConfig::get('sf_upload_dir'),
      'required' => false
    )));
    
    $this->setValidator('attachment_delete', new sfValidatorPass());
    
    $this->useFields(array('name', 'is_public'));
  }
  
  public function doSave($conn = null)
  {
    $this->getObject()->setUserId(sfContext::getInstance()->getUser()->getId());
    parent::doSave();
  }
}
