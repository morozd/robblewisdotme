<?php

	
add_post_type_support('page', 'excerpt');

register_sidebars( 1,
array(
'name' => 'Home-Left',
'before_widget' => '<div id="%1$s">',
'after_widget' => '</div>',
'before_title' => '<h3><span class="icon">*</span> ',
'after_title' => '</h3>'
)
);

register_sidebars( 1,
array(
'name' => 'Home-Center',
'before_widget' => '<div id="%1$s">',
'after_widget' => '</div>',
'before_title' => '<h3><span class="icon">]</span> ',
'after_title' => '</h3>'
)
);

register_sidebars( 1,
array(
'name' => 'Home-Right',
'before_widget' => '<div id="%1$s">',
'after_widget' => '</div>',
'before_title' => '<h3><span class="icon">Z</span> ',
'after_title' => '</h3>'
)
);

function get_tweet() {
 
	require 'scripts/tmhOAuth.php';
	 
	$tmhOAuth = new tmhOAuth(array(
	 'consumer_key' => 'jhrbRx4JEyhyU6uH9L7lQ',
	 'consumer_secret' => 'YYtk7I2NiWqtj8XZniLIRng77cXmFgd6GZkaGZCco',
	 'user_token' => '16434694-jJaaVHr7OFnBL68iYpciVLbdgnLv5XpzXwDMCPqkF',
	 'user_secret' => 'CKp1VKwVTrd1xoCKSF88Poe4vAMjZZCCQbLAzbGg',
	 'curl_ssl_verifypeer' => false
	));
	 
	$code = $tmhOAuth->request('GET', $tmhOAuth->url('1.1/statuses/user_timeline'), array(
	 'screen_name' => 'rmlewisuk',
	 'count' => '3'));
	 
	$response = $tmhOAuth->response['response'];
	$tweets = json_decode($response, true);

	$tweet = $tweets[0]['text'];

	//Convert urls to <a> links
	$tweet = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a target=\"_blank\" href=\"$1\">$1</a>", $tweet);
	
	//Convert hashtags to twitter searches in <a> links
	$tweet = preg_replace("/#([A-Za-z0-9\/\.]*)/", "<a target=\"_new\" href=\"http://twitter.com/search?q=$1\">#$1</a>", $tweet);
	
	//Convert attags to twitter profiles in <a> links
	$tweet = preg_replace("/@([A-Za-z0-9\/\.]*)/", "<a href=\"http://www.twitter.com/$1\">@$1</a>", $tweet);
	
	echo $tweet;
	 
}

?>