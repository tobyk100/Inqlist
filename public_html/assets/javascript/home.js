$(function() {

  $('#search').focus(function() {
    if ($(this).val() == 'Search an Idea or Person') {  
      $(this).val('');
    }
  }).blur(function() {
    if ($(this).val() == '') {      
      $(this).val('Search an Idea or Person');
    }
  });

  $('ul li').live('click',function() {
    $('ul li').removeClass('active');
    $(this).addClass('active');  
  });

});