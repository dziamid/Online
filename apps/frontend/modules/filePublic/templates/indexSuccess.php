<?php use_helper('I18N', 'Date') ?>
<?php include_partial('filePublic/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('FilePublic List', array(), 'messages') ?></h1>

  <?php include_partial('filePublic/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('filePublic/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('filePublic/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('filePublic/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
