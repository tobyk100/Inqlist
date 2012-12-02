add_inqling = function(inqlink) {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/create_inqling',
    data: {'body': inqlink },
    dataType: 'json',
    success: function(data) {
      alert(data);
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
