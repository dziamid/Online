<?php function echoNode($tree, $level=0) { ?>
  <ul class='tree'>
  <?php foreach ($tree as $node): ?>
    <li class="node" data-id='<?php echo $node['id'] ?>'>
      
      <div class="comment">
        <div class="header">
          <h4><?php echo $node['username'] ?></h4>
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
        <?php echo echoNode($node['__children'], ++$level) ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>       
  </ul>       
<?php } ?>

<?php echo echoNode($tree) ?>