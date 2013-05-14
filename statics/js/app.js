$(function(){
  $('.item').live('click', function(){
    var a = $(this).find('a');
    a.get(0).click();
  });
});
