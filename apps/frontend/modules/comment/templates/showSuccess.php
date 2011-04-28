<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $comment->getId() ?></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td><?php echo $comment->getUsername() ?></td>
    </tr>
    <tr>
      <th>File:</th>
      <td><?php echo $comment->getFileId() ?></td>
    </tr>
    <tr>
      <th>Root:</th>
      <td><?php echo $comment->getRootId() ?></td>
    </tr>
    <tr>
      <th>Message:</th>
      <td><?php echo $comment->getMessage() ?></td>
    </tr>
    <tr>
      <th>Lft:</th>
      <td><?php echo $comment->getLft() ?></td>
    </tr>
    <tr>
      <th>Rgt:</th>
      <td><?php echo $comment->getRgt() ?></td>
    </tr>
    <tr>
      <th>Level:</th>
      <td><?php echo $comment->getLevel() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('comment_edit', $comment) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('comment') ?>">List</a>
