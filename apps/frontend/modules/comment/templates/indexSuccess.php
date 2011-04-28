<h1>Comments List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Username</th>
      <th>File</th>
      <th>Root</th>
      <th>Message</th>
      <th>Lft</th>
      <th>Rgt</th>
      <th>Level</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comments as $comment): ?>
    <tr>
      <td><a href="<?php echo url_for('comment_show', $comment) ?>"><?php echo $comment->getId() ?></a></td>
      <td><?php echo $comment->getUsername() ?></td>
      <td><?php echo $comment->getFileId() ?></td>
      <td><?php echo $comment->getRootId() ?></td>
      <td><?php echo $comment->getMessage() ?></td>
      <td><?php echo $comment->getLft() ?></td>
      <td><?php echo $comment->getRgt() ?></td>
      <td><?php echo $comment->getLevel() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('comment_new') ?>">New</a>
