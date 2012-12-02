add_inqling = function(inqlink) {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/create_inqling',
    data: {'body': inqlink },
    dataType: 'json',
    success: function(data) {
      var body = data.body;
      var rating = data.pub_rating;
      $('<img class="resize left" src="/assets/images/inqling_pics/i1.jpg"/><li class="inqling"><div class="text">'+body+'</div><div class="vote-bg"><span class="vote-text">5.0</span></div><img class="resize" src="/assets/images/profile_pics/1.jpg"></li>').prependTo('.posts');
    }
  });
}
create_solution = function() {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/create_solution',
    data: {
      'body': 'solution body', 
      'inqling': '1'
    },
    dataType: 'json',
    success: function(data) {
      alert(data);
    }
  });
}
create_comment = function() {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/create_comment',
    data: {
      'body': 'comment body',
      'comment': '1'
    },
    dataType: 'json',
    success: function(data) {
      alert(data);
    }
  });
}
