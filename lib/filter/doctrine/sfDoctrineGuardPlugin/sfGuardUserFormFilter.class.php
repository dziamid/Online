<?php

/**
 * sfGuardUser filter form.
 *
 * @package    www
 * @subpackage filter
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: sfDoctrinePluginFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserFormFilter extends PluginsfGuardUserFormFilter
{
  public function configure()
  {
    $this->useFields(array('username', 'is_active', 'last_login', 'created_at', 'groups_list'));

  }
}
