$(document).ready(function(){
  $('ul.tree span.reply').click(function(){
    var id = $(this).parent('li').attr('data-id');
    $('#comment_parent_id').attr('value', id);
  });

});