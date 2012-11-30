upvote = function() {
	var id = $('.active').attr('id').substring(4);
	var solved = $('#solution-slider a').css('left').slice(0, - 1);
	var urgency = $('#urgency-slider ').css('left').slice(0, - 1);

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
     	alert("success");
    }
  });
}
