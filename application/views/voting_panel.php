<li class="voting-panel active">
  <div id="text-and-sliders">
    <div class="text">
      The plots of land adjacent to the highways of LA are bought
      up and used only for billboards, providing
      no benefit to the community. wha long long long
      lonngngngngngg
    </div>
    <div id="sliders">
      <div id="solution-slider-wrapper">
        <span>Solved</span>
        <div id="solution-slider"></div>
        <span>Unsolved</span>
      </div>
      <div id="urgency-slider-wrapper">
        <span>Trivial</span>
        <div id="urgency-slider"></div>
        <span>Urgent</span>
      </div>
    </div>
  </div>
  <div id="submit-vote-button"><img src='/assets/images/vote_checkmark.png' /></div>
</li>
<script type="text/javascript">
$(document).ready(
  $("#submit-vote-button").click(
    function() {
      var id = $('.inqling.active').attr('id').substring(4);
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
          var inq = $('.inqling.active');
          inq.next('li').addClass('active');
          inq.removeClass('active');
          var new_val = $('.inqling.active').find('.text').html();
          $('.voting-panel.text').html(new_val);
        }
      });
    })
)
</script>
