<?php

require_once '/var/www/lib/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfForkedDoctrineApplyPlugin');
    
    $this->dispatcher->connect('command.post_command', array('toolkitEvents', 'commandPostEventHook'));  

  }
}
