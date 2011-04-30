<ul>
  <?php foreach ($routes as $route): ?>
    <?php if (url_for($sf_data->getRaw('currentUri')) !== url_for($route) || $sf_request->getMethod() !== 'GET'): ?>
      <li><?php echo link_to(__($route), $route) ?></li>
    <?php else: ?>
      <li><?php echo __($route) ?></li>
    <?php endif; ?>
  <?php endforeach; ?>
  <?php if ($sf_user->isAuthenticated()): ?>
  <?php endif; ?>
</ul>