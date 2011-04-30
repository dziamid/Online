<h1><?php echo __("Files list") ?></h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($files as $file): ?>
    <tr>
      <td><a href="<?php echo url_for('file_show', $file) ?>"><?php echo $file->getId() ?></a></td>
      <td><?php echo $file->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('file_new') ?>"><?php echo __('Upload file') ?></a>
