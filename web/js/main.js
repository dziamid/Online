$(document).ready(function(){
  $('#comments .reply span').click(function(){
    //set parent_id widget value
    var node = $(this).closest('.node');
    $('#comment_parent_id').attr('value', node.attr('data-id'));
    
    //move form element under current node
    $('#comment_form').appendTo(node);
    //show cancel button
    $('#comment_form .cancel').show();
  });
  
  $('#comments .cancel').click(function(e){
    var form = $(this).closest('form');
    form.appendTo('#comments');
  });
});