<h1><?php echo __('File "%%name%%"', array('%%name%%' => $file->getName())) ?></h1>

<div id="file">
  
  <div id="info">
    <table class="info">
     <tbody>
       <tr>
         <th><?php echo __('File name') ?></th>
         <td>
          <?php if (file_exists(sfConfig::get('sf_upload_dir').'/files/'.$file->getName())): ?>
            <a href="<?php echo sprintf('/uploads/files/%s', $file->getName()) ?>" target="_blank"><?php echo $file->getName() ?></a>
          <?php else: ?>
            <span><?php echo $file->getName() ?></span>
          <?php endif; ?>
         </td>
       </tr>
       <tr>
         <th><?php echo __('Uploaded at') ?></th>
         <td><?php echo $file->getDateTimeObject('created_at')->format('d/m/Y') ?></td>
       </tr>
       <tr>
         <th><?php echo __('File owner') ?></th>
         <td><?php echo $file->getUser()->getUsername() ?></td>
       </tr>
       <tr>
         <th><?php echo __('File owner browser') ?></th>
         <td><?php echo $file->getUserBrowser() ?></td>
       </tr>
       <tr>
         <th><?php echo __('File owner IP address') ?></th>
         <td><?php echo $file->getUserIp() ?></td>
       </tr>
     </tbody>
    </table>      
  </div>

  
  <div id="comments">
    <?php if ($file->hasComments()): ?>
      <h3><?php echo __('Comments on this file') ?></h3>
    <?php else: ?>
      <h3><?php echo __('No one has commented here yet.') ?></h3>  
    <?php endif; ?>
    
    <?php include_partial('comment_tree', array('tree'=>$comments, 'file'=>$file)) ?>
    
    <?php include_partial('comment_form', array('form'=>$form, 'file'=>$file)) ?>  
  </div>  

</div>