<?php if (file_exists(sfConfig::get('sf_upload_dir').'/'.$file->getName())): ?>
  <a href="<?php echo sprintf('/uploads/%s', $file->getName()) ?>" target="_blank"><?php echo $file->getName() ?></a>
<?php else: ?>
  <?php echo $file->getName() ?>
<?php endif; ?>