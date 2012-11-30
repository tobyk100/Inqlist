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

  <ul class="sort">
    <li class="active">Trending</li>
    <li>All Time</li>
    <li>New</li>
  </ul>

  <?php $this->load->view('voting_panel'); ?>
  <?php $this->load->view('comments'); ?>
  <ul class="posts">
    <?php foreach($inqlings as $inqling){ 
      $rand = rand(1,25);
      $rand2 = rand(1,25);
    ?>
      <img class="resize left" src='/assets/images/inqling_pics/i<?php echo $rand2 ?>.jpg' />
      <li id = '<?php echo "inq_" . $inqling['id']; ?>'>
        <div class="text"><?php echo $inqling['body']; ?></div>
        <div class="vote-bg">
          <span class="vote-text"><?php echo number_format($inqling['pub_rating'], 1); ?></span>
        </div>
         <img class="resize" src="/assets/images/profile_pics/<?php echo $rand;?>.jpg">
      </li>
    <?php } ?>
  </ul>
</div>
</body>
