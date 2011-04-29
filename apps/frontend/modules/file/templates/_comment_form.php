<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('file_comment', $file) ?>" method="post">

  <ul>
    <li>
      <?php echo $form['message']->render() ?>          
    </li>
    <?php if (isset($form['username'])): ?>
      <?php echo $form['username']->renderRow() ?>
    <?php endif; ?>
  </ul>
  <input type="submit" value="<?php echo __('Save') ?>" />
  <?php echo $form->renderHiddenFields() ?>
</form>
