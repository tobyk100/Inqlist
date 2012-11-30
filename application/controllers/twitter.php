<?php

class Twitter extends CI_Controller {
	public function index()
	{
    include(dirname(__FILE__) . '/twitteroauth/twitteroauth/twitteroauth.php');
    $connection = new TwitterOAuth('ZJt4OfrhJ4XH6FGwr3DrVQ',
      'zwTnhS3eoSSKnpqcJvnk1oPF9z8ZI8Fwe1oAF1XqE',
      '497353158-DxFhf28qkm7pbIMUDXf7HpBpWfHizx7oiSWBPaEl',
      'Fr2w7q3N3IsJrRpQKD2Wftgsg1Dful612nGtxBVX08');
    print_r($connection->get('https://api.twitter.com/1.1/statuses/mentions_timeline.json'));
	}
}
