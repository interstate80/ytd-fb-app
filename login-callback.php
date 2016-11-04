<?php

require_once __DIR__ . '/facebook-sdk/autoload.php';
require_once __DIR__ . '/includes/fb-init.php';

	$fb = new Facebook\Facebook([
	'app_id' => FB_APP_ID,
	'app_secret' => FB_APP_SECRET,
	'default_graph_version' => 'v2.5',]);
	
$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;

  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
  header('HTTP/1.1 200 OK');
  header("Location: http://fb-app.yatakdumayu.ru/?".session_name()."=".session_id());
}
?>