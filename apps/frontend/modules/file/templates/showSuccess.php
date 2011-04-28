<?php function echoNode($subtree, $parent=null, $level=0) { ?>
  <div class="node <?php echo sprintf('level_%s', $level) ?>" data-parent='<?php echo $parent['id'] ?>'>
    <div class="content">
      <ul>
      <?php foreach ($subtree as $cat): ?>
        <li data-id='<?php echo $cat['id'] ?>' class="button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
          <span class='ui-button-text'><?php echo $cat['name'] ?></span>
        </li>
      <?php endforeach; ?>       
      </ul>       
    </div>
    <?php foreach ($subtree as $cat): ?>
  
    <?php if (count($cat['__children']) > 0): ?>
      <?php echo echoNode($cat['__children'], $cat, $level + 1) ?>
    <?php endif; ?>
    
    <?php endforeach; ?>
  </div>

<?php } ?>

<table>
  <tbody>
    <tr>
      <th>Name:</th>
      <td><?php echo $file->getName() ?></td>
    </tr>
  </tbody>
</table>

Comments:
<?php echo echoNode($comments) ?>    


<a href="<?php echo url_for('file') ?>">List</a>
