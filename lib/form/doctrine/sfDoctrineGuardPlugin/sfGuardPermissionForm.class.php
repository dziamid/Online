<?php

/**
 * sfGuardPermission form.
 *
 * @package    www
 * @subpackage form
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardPermissionForm extends PluginsfGuardPermissionForm
{
  public function configure()
  {
    $this->useFields(array('name', 'description', 'groups_list'));

    $this->getWidget('groups_list')->setOption('expanded', true);
  }
}
