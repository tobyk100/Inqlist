disp_solutions = function() {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/get_solutions',
    data: {'id': $('this').attr('id')},
    dataType: 'json',
    success: function(data) {
      $.each(data, function(row, solution){
        $(<li><div class="comment">solution.body</div><div class="arrow-up">&#x25B2;</div><div class="arrow-down">&#x25BC;</div></li>).appendTo("#solutions");
      })
    }
  });
}

disp_solutions = function() {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/upvote_solution',
    data: {'id': $('this').attr('id')},
    dataType: 'json',
    success: function(data) {
      
    }
  });
}