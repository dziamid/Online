<?php use_helper('I18N') ?>

<h1><?php echo __('Signin') ?></h1>

<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>

<div id="hint">
  <p>Use the following account to test the application</p>
  <ul>
    <li><b>Username:</b> demo</li>
    <li><b>Password:</b> demo</li>
  </ul>   
</div>
