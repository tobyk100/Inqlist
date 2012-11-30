add_inqling = function() {
  $.ajax({
    type: 'POST',
    url: '/index.php/main/create_inqling',
    data: {'body': 'new inqling' },
    dataType: 'json',
    success: function(data) {
      alert(data);
    }
  });
}
