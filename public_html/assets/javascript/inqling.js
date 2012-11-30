function add_inqling() {
  $.ajax({
    type: 'POST',
    url: '/index.php/main',
    data: {body: 'new inqling' },
    dataType: 'json',
    success: function(response) {
      alert("it works");
    }
  }
}
