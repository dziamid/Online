<?php use_stylesheet('error.css', 'last') ?>

<h1>Oops! Page Not Found</h1>

<dl class="sfTMessageInfo">
  <dt>Did you type the URL?</dt>
  <dd>You may have typed the address (URL) incorrectly. Check it to make sure you've got the exact right spelling, capitalization, etc.</dd>

  <dt>Did you follow a link from somewhere else at this site?</dt>
  <dd>If you reached this page from another part of this site, please email us at <?php echo mail_to('support@onliner.by') ?> so we can correct our mistake.</dd>

  <dt>Did you follow a link from another site?</dt>
  <dd>Links from other sites can sometimes be outdated or misspelled. Email us at <?php echo mail_to('support@onliner.by') ?> where you came from and we can try to contact the other site in order to fix the problem.</dd>

  <dt>What's next</dt>
  <dd>
    <ul class="sfTIconList">
      <li class="sfTLinkMessage"><a href="javascript:history.go(-1)">Back to previous page</a></li>
      <li class="sfTLinkMessage"><?php echo link_to('Go to Homepage', '@homepage') ?></li>
    </ul>
  </dd>
</dl>
