$(function() {


  $('#solution-slider').slider();
  $('#urgency-slider').slider();



  $('#form').focus(function() {
    if ($(this).val() == 'Enter your Inqling') {  
      $(this).val('');
    }
  }).blur(function() {
    if ($(this).val() == '') {      
      $(this).val('Enter your Inqling');
    }
  });

  $('#post').live('click',function() {
    var new_post = $('#form').val();
    add_inqling(new_post);
  });

  $('#form').keypress(function(event) {
    if (event.which == 13) {
      var new_post = $('#form').val();
      add_inqling(new_post);
    }
  });

  $('.posts > li').live('click',function() {
    var new_val = $(this).find('.text').html();
    var id = $(this).attr('id').substring(4);
    $('.voting-panel .text').html(new_val);
    disp_solutions(id);
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

  $('#filter').live('click', function() {
    if($(this).hasClass('open')) {
      $(this).removeClass('open');
    } else {
      $(this).addClass('open');
    }
  });

});