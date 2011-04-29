<?php function echoNode($tree, $level=0) { ?>
  <ul class='tree'>
  <?php foreach ($tree as $node): ?>
    <li data-id='<?php echo $node['id'] ?>'>
      <?php echo $node['message'] ?>
      <?php if ($level < sfConfig::get('app_reply_level_limit',5)): ?>
        <span class='link reply'>reply</span>
      <?php endif; ?>
      <?php if (count($node['__children']) > 0): ?>
        <?php echo echoNode($node['__children'], ++$level) ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>       
  </ul>       
<?php } ?>

<?php echo echoNode($tree) ?>