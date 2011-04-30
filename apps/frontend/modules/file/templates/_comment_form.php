<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form id="comment_form" action="<?php echo url_for('file_comment', $file) ?>" method="post">
  <ul>
    <li>
      <?php echo $form['message']->renderError() ?>
      <?php echo $form['message']->render() ?>          
    </li>
    <?php if (isset($form['username'])): ?>
      <?php echo $form['username']->renderError() ?>
      <?php echo $form['username']->render() ?>
    <?php endif; ?>
  </ul>
  <input type="submit" value="<?php echo __('Save') ?>" />
  <?php echo $form->renderHiddenFields() ?>
</form>

<?php if (isset($form['username'])): ?>
<script type="text/javascript">
  var fieldname = '<?php echo $form['username']->renderId() ?>';
  var label = '<?php echo $form['username']->renderLabelName() ?>';
  var field = $('#'+fieldname);
  var form = $('#comment_form');
  if (!field.attr('value'))
  {
    field.attr('value', label);
    field.css('color', '#777777');
  }
  field.focus(function(){
    var o = $(this);
    if (o.attr('value') == label)
    {
      o.attr('value','');
    }
  });
  field.blur(function(){
    var o = $(this);
    if (o.attr('value') == '')
    {
      o.attr('value',label);
    }    
  });
  form.submit(function(){
    if (field.attr('value') == label)
    {
      field.attr('value','');
    }
  });
</script>
<?php endif; ?>