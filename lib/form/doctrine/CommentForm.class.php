<?php

/**
 * Comment form.
 *
 * @package    www
 * @subpackage form
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentForm extends BaseCommentForm
{
  public function configure()
  {
    $this->setWidget('parent_id', new sfWidgetFormInputHidden());
    $this->setValidator('parent_id', new sfValidatorDoctrineChoice(array(
      'model' => 'Comment',
      'required' => false,
    )));
    
    if (sfContext::getInstance()->getUser()->isAuthenticated())
    {
      $this->useFields(array(
        'message',
        'parent_id',
      ));      
    }
    else
    {
      $this->useFields(array(
        'username',
        'message',
        'parent_id',
      ));
    }
  }
  /**
   * Updates and saves the current object. Overrides the parent method
   * by treating the record as a node in the nested set and updating
   * the tree accordingly.
   *
   * @param Doctrine_Connection $con An optional connection parameter
   */
  public function doSave($con = null)
  {
    if (sfContext::getInstance()->getUser()->isAuthenticated())
    {
      $this->getObject()->username = sfContext::getInstance()->getUser()->getUsername();  
    }
    // save the record itself
    parent::doSave($con);
    // if a parent has been specified, add/move this node to be the child of that node
    if ($this->getValue('parent_id'))
    {
      $parent = $this->getObject()->getTable()->findOneById($this->getValue('parent_id'));

      if ($this->isNew())
      {
        $this->getObject()->getNode()->insertAsLastChildOf($parent);
      }
      else
      {
        $this->getObject()->getNode()->moveAsLastChildOf($parent);
      }
    }
    // if no parent was selected, add/move this node to be a new root in the tree
    else
    {
      $tree = $this->getObject()->getTable()->getTree();

      if ($this->isNew())
      {
        $tree->createRoot($this->getObject());
      }
      else
      {
        $this->getObject()->getNode()->makeRoot($this->getObject()->getId());
      }
    }
  }

}
