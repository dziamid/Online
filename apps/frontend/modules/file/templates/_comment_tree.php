<?php function echoNode($tree) { ?>
  <ul>
  <?php foreach ($tree as $node): ?>
    <li data-id='<?php echo $node['id'] ?>'>
      <?php echo $node['message'] ?>
      <?php if (count($node['__children']) > 0): ?>
        <?php echo echoNode($node['__children']) ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>       
  </ul>       
<?php } ?>

<?php echo echoNode($tree) ?>