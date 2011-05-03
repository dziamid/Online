<?php use_helper('Date') ?>
<?php function echoNode($tree, $file, $level=0) { ?>
  <ul class='tree'>
  <?php foreach ($tree as $node): ?>
    <li class="node" data-id='<?php echo $node['id'] ?>'>
      
      <div class="comment">
        <div class="header">
            <a name="<?php echo $node['id'] ?>" href="<?php echo url_for('file_show', $file) ?>#<?php echo $node['id'] ?>">#</a>
            <b><?php echo $node['username'] ?></b> 
            <span class="date"><?php echo format_date($node['created_at'], 'dd MMMM yyyy HH:mm') ?></span>
          <?php if ($level < sfConfig::get('app_reply_level_limit',5)): ?>
            <ul class="actions">
              <li class="reply"><span class='link'><?php echo __('reply') ?></span></li>
            </ul>
          <?php endif; ?>          
        </div>
        <div class="body">
          <?php echo $node['message'] ?>        
        </div>
      </div>

      <?php if (count($node['__children']) > 0): ?>
        <?php echo echoNode($node['__children'], $file, ++$level) ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>       
  </ul>       
<?php } ?>

<?php echo echoNode($tree, $file) ?>