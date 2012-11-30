disp_solutions = function(inq_id) {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/get_solutions',
    data: {'id': inq_id },
    dataType: 'json',
    success: function(data) {
      $.each(data, function(id, solution){
        var body = solution.body;
        $('<li><div class="comment">'+body+'</div><div class="arrow-up">&#x25B2;</div><div class="arrow-down">&#x25BC;</div></li>').prependTo(".comments");
      })
    }
  });
}

upvote = function() {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/upvote_solution',
    data: {'id': $('this').attr('id')},
    dataType: 'json',
    success: function(data) {
      
    }
  });
}

downvote = function() {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/downvote_solution',
    data: {'id': $('this').attr('id')},
    dataType: 'json',
    success: function(data) {
      
    }
  });
}