<div class="sf_admin_form_row <?php $field->hasError() and print ' errors' ?>">
  <?php echo $field->renderError() ?>
  <div>
    <?php echo $field->renderLabel() ?>

    <div class="content"><?php echo $field->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?></div>

    <?php if ($help = $field->renderHelp()): ?>
      <div class="help"><?php echo $help ?></div>
    <?php endif; ?>
  </div>
</div>