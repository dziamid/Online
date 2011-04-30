<h1><?php echo __('File "%%name%%"', array('%%name%%' => $file->getName())) ?></h1>

<div id="comments">
  <?php if ($file->hasComments()): ?>
    <h3><?php echo __('Comments on this file') ?></h3>
  <?php else: ?>
    <h3><?php echo __('No one has commented here yet.') ?></h3>  
  <?php endif; ?>
  
  <?php include_partial('comment_tree', array('tree'=>$comments)) ?>
  
  <h3><?php echo __('Your comment') ?></h3>  
  <?php include_partial('comment_form', array('form'=>$form, 'file'=>$file)) ?>  
</div>
