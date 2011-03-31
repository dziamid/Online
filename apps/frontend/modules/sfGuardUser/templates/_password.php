<?php if (!$form->isNew()): ?>
  <div id="toggler" class="sf_admin_form_row">
    Изменить пароль? <input type='checkbox' <?php echo $form->isBound() ? "checked='checked'":"" ?> onclick="$(this).parent().next().toggle()" />
  </div>
  <div <?php echo $form->isBound() ? "":"style='display:none'" ?>>
    <?php include_partial('sfGuard/customfield', array('field'=>$form['password'], 'attributes'=>array('autocomplete'=>'off'))) ?>
    <?php include_partial('sfGuard/customfield', array('field'=>$form['password_again'], 'attributes'=>array('autocomplete'=>'off'))) ?>    
  </div>
<?php else: ?>
  <?php include_partial('sfGuard/customfield', array('field'=>$form['password'], 'attributes'=>array('autocomplete'=>'off'))) ?>
  <?php include_partial('sfGuard/customfield', array('field'=>$form['password_again'], 'attributes'=>array('autocomplete'=>'off'))) ?>   
<?php endif; ?>