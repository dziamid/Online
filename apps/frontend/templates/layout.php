<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="content">
          <h1>
            <a href="<?php echo url_for('@homepage') ?>">Onliner</a>
          </h1>
        </div>
      </div>

      <div id="menu">
        <?php include_component('home', 'menu') ?>
          <ul class="stick_right">
            <li>
            <?php if ($sf_user->isAuthenticated()): ?>
              <?php echo $sf_user->getGuardUser()->getEmailAddress() ?>
              <a href="<?php echo url_for('@sf_guard_signout') ?>">
                <?php echo __('menu.signout') ?>
              </a>
            <?php else: ?>
              <a href="<?php echo url_for('@sf_guard_signin') ?>">
                <?php echo __('menu.signin') ?>
              </a>              
            <?php endif; ?>
            </li>
          </ul>
      </div>

      <div id="content">
          <?php echo $sf_content ?>
      </div>

    </div>
  </body>
</html>

