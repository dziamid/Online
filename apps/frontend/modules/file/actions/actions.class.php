<?php

require_once dirname(__FILE__).'/../lib/fileGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/fileGeneratorHelper.class.php';

/**
 * file actions.
 *
 * @package    www
 * @subpackage file
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fileActions extends autoFileActions
{
  public function executeShow(sfWebRequest $request)
  {
    $this->file = $this->getRoute()->getObject();
    $this->comments = Doctrine::getTable('Comment')->getTreeForFile($this->file->getId());

    $comment = new Comment();
    $comment->File = $this->file;
    $this->form = new CommentForm($comment);
  }
  protected function processCommentForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $obj = $form->save();
      
      $file = $obj instanceof File ? $obj : $obj->getFile();

      $this->redirect('file_show', $file);
    }
  }

  public function executeComment(sfWebRequest $request)
  {
    $this->file = $this->getRoute()->getObject();
    $this->comments = Doctrine::getTable('Comment')->getTreeForFile($this->file->getId());
    
    $comment = new Comment();
    $comment->File = $this->file;
    $this->form = new CommentForm($comment);

    $this->processCommentForm($request, $this->form);

    $this->setTemplate('show');
  }
}
