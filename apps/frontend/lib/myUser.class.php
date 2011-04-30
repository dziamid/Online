<?php

class myUser extends sfGuardSecurityUser
{
  /**
   * proxy for sfGuardUser::getId()
   *
   */
  public function getId()
  {
    if (!$this->isAuthenticated())
    {
      throw new sfException('The user is not authenticated.');
    }
    return $this->getGuardUser()->getId();
  }
}
