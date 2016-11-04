<?php
	$fb = new Facebook\Facebook([
	'app_id' => FB_APP_ID,
	'app_secret' => FB_APP_SECRET,
	'default_graph_version' => 'v2.5',]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://fb-app.yatakdumayu.ru/login-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Войти с использованием учетной записи Facebook!</a>';
?>