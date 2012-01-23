<?php

class sfGuardBasicSecurityFilter extends sfBasicSecurityFilter
{
  /**
   * @see sfFilter
   */
  public function execute($filterChain)
  {
    if ($this->isFirstCall())
    {
      // deprecated notice
      $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('The filter "%s" is deprecated. Use "sfGuardRememberMeFilter" instead.', __CLASS__), 'priority' => sfLogger::NOTICE)));

      if (
        $this->context->getUser()->isAnonymous()
        &&
        $cookie = $this->context->getRequest()->getCookie($cookieName)
      )
      {
        $criteria = new Criteria();
        $criteria->add(sfGuardRememberKeyPeer::REMEMBER_KEY, $cookie);

        if ($rk = sfGuardRememberKeyPeer::doSelectOne($criteria))
        {
          $this->context->getUser()->signIn($rk->getsfGuardUser());
        }
      }
    }

    parent::execute($filterChain);
  }
}
