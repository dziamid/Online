<?php use_helper('I18N') ?>

<h1><?php echo __('Signin') ?></h1>

<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>