<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_show"><a href="<?php echo url_for('file_show', $file) ?>"><?php echo __('View comments') ?></a></li>
    <?php echo $helper->linkToEdit($file, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($file, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  </ul>
</td>
