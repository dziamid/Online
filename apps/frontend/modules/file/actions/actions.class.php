<?php

/**
 * file actions.
 *
 * @package    www
 * @subpackage file
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fileActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->files = $this->getRoute()->getObjects();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->file = $this->getRoute()->getObject();
    $this->comments = Doctrine::getTable('Comment')->getTreeForFile($this->file->getId());

    $comment = new Comment();
    $comment->File = $this->file;
    $this->form = new CommentForm($comment);

  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FileForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = new FileForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new FileForm($this->getRoute()->getObject());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new FileForm($this->getRoute()->getObject());

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->getRoute()->getObject()->delete();

    $this->redirect('@file');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
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

    $this->processForm($request, $this->form);

    $this->setTemplate('show');
  }
}
