<?php

/**
 * sfGuardGroup form.
 *
 * @package    www
 * @subpackage form
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardGroupForm extends PluginsfGuardGroupForm
{
  public function configure()
  {
    $this->useFields(array('name', 'description', 'permissions_list'));

    $this->getWidget('permissions_list')->setOption('expanded', true);
  }
}
