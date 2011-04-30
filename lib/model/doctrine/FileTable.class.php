<?php

/**
 * FileTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class FileTable extends Doctrine_Table
{
  /**
   * Returns an instance of this class.
   *
   * @return object FileTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('File');
  }
  /**
   * Returns a list of files related to sign-in user
   *
   */
  public function getForUser()
  {
    $user = sfContext::getInstance()->getUser();
    $q = $this->createQuery('f')
      ->where('f.user_id = ?', $user->getId());
    
    return $q->execute();
  }
}