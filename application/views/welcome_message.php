<body>

<header>
  <div class="container">
    <img id="logo" src="/assets/images/logo.png" />
    <input id="form" value="Enter your Inqling">
    <!--<button id="post">Post</button>-->

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
  
  <!--<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>-->

  <ul class="sort">
    <li class="active">Trending</li>
    <li>All Time</li>
    <li>New</li>    
  </ul>

  <li class="voting-panel active"><div class="text">The plots of land adjacent to the highways of LA are bought up and used only for billboards, providing no benefit to the community.</div><div id="solution-slider"></div><div id="urgency-slider"></div></li>  
  <ul class="comments">
    
  </ul>
  <ul class="posts">
    <?php foreach($inqlings as $inqling){ ?>
      <li id = '<?php echo "inq_" . $inqling['id']; ?>'><div class="text"><?php echo $inqling['body']; ?> </div> <div class="vote-bg"><span class="vote-text"><?php echo number_format($inqling['pub_rating'], 1); ?></span></div> <img src="/assets/images/user.png"></li>  
    <?php } ?>
  </ul>
</div>
</body>
