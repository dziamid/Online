<table>
  <tbody>
    <tr>
      <th>Name:</th>
      <td><?php echo $file->getName() ?></td>
    </tr>
  </tbody>
</table>

<div id="comments">
  <h3><?php echo __('Comments on this file') ?></h3>
  <?php include_partial('comment_tree', array('tree'=>$comments)) ?>
  
  <h3><?php echo __('Your comment') ?></h3>  
  <?php include_partial('comment_form', array('form'=>$form, 'file'=>$file)) ?>  
</div>
