function submit_vote_button() {
	var id = $('.active').attr('id').substring(4);
	var solved = $('#solution-slider a').css('left').slice(0, - 1);
	var urgency = $('#urgency-slider a').css('left').slice(0, - 1);

  $.ajax({
    type: 'POST',
    url: '/index.php/main/submit_vote',
    data: {
    	'id': id,
    	'sol_num' : solved,
      'urg_num' : urgency
    },
    dataType: 'json',
    success: function(data) {
      $('.active:first').next('li').addClass('active');
      $('.active:first').removeClass('active');
      var new_val = $('.active:first').find('.text').html();
      $('.voting-panel .text').html(new_val);
    }
  });
}
