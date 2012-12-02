<body>

<header>
  <div class="container">
    <img id="logo" src="/assets/images/logo.png" />
    <input id="form" value="Enter your Inqling">
    <button id="post">Post</button>

    <ul>
      <!--<li>Filter
        <div id="dropdown">
        Hello
        </div>
      </li>-->
      <li>Login</li>
    <ul>
  </div>  
</header>

<div id="main" class="container">
  
  <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>

  <ul class="sort">
    <li class="active">Trending</li>
    <li>All Time</li>
    <li>New</li>    
  </ul>

  <ul class="posts">
    <li><div class="text">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</div> <div class="vote-bg"><span class="vote-text">9.2</span></div> <img src="/assets/images/user.png"></li>  
      <ul class="comments">
        <li><div class="comment">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</div><div class="arrow-up">&#x25B2;</div><div class="arrow-down">&#x25BC;</div></li>
        <li><div class="comment">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</div><div class="arrow-up">&#x25B2;</div><div class="arrow-down">&#x25BC;</div></li>
        <li><div class="comment">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</div><div class="arrow-up">&#x25B2;</div><div class="arrow-down">&#x25BC;</div></li>
        <li><div class="comment">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</div><div class="arrow-up">&#x25B2;</div><div class="arrow-down">&#x25BC;</div></li>
        <li><div class="comment">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</div><div class="arrow-up">&#x25B2;</div><div class="arrow-down">&#x25BC;</div></li>
        <li><div class="comment">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</div><div class="arrow-up">&#x25B2;</div><div class="arrow-down">&#x25BC;</div></li>
      </ul>

    <?php foreach($inqlings as $inqling){ ?>
      <li><div class="text"><?php echo $inqling['body']; ?> </div> <div class="vote-bg"><span class="vote-text">9.2</span></div> <img src="/assets/images/user.png"></li>  
    <?php } ?>
    

  </ul>
</div>
<script type="text/javascript">
$(document).ready(function() {
  add_inqling();
});
</script>
</body>
