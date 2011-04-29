$(document).ready(function(){
  $('.tree .reply span').click(function(){
    var id = $(this).closest('.node').attr('data-id');
    $('#comment_parent_id').attr('value', id);
  });

});