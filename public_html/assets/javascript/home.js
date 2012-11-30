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

  $('.posts > li').live('click',function() {
    if ( $(this).hasClass('active') ) {
      $(this).removeClass('active');
      $(this).next('ul').css({'display':'none'});
    } else { 
      $('.comments').css({'display':'none'});
      $('.posts li').removeClass('active');    
      $(this).addClass('active');
      $(this).next('ul').css({'display':'block'});
    }
  });

  $('.sort li').live('click',function() {
    $('.sort li').removeClass('active');
    $(this).addClass('active');
  });

});