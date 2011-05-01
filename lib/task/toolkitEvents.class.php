<?php

class toolkitEvents
{
  static public function commandPostEventHook(sfEvent $event)
  {
    $task = $event->getSubject();
    if ($task->getFullName() === 'doctrine:data-load')
    {
      $upload_dir = sfConfig::get('sf_upload_dir').'/files';
      $fixtures_dir = sfConfig::get('sf_data_dir').'/files';

      //remove all files in upload dir
      $task->getFilesystem()->remove(sfFinder::type('file')->in($upload_dir));
      //copy fixtures dir recursively
      $task->getFilesystem()->mirror($fixtures_dir, $upload_dir, sfFinder::type('any'));
    }
  }
}
