<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_show">
      <a href="<?php echo url_for('file_show', $file) ?>">
      <?php if(($count = $file->getComments()->count()) > 0): ?>
        <?php echo __('View comments (%%count%%)',array('%%count%%'=>$file->getComments()->count())) ?>
      <?php else: ?>
        <?php echo __('View comments') ?>
      <?php endif; ?>
      </a>
    </li>
  </ul>
</td>
