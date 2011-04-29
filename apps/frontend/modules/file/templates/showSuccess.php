<table>
  <tbody>
    <tr>
      <th>Name:</th>
      <td><?php echo $file->getName() ?></td>
    </tr>
  </tbody>
</table>

Comments:
<?php include_partial('comment_tree', array('tree'=>$comments)) ?>

<?php include_partial('comment_form', array('form'=>$form, 'file'=>$file)) ?>