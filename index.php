<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="ru-RU" prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/WebPage">
<head>
	<title>Генератор умных мыслей "ЯтакДУМАЮ"</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="http://fb-app.yatakdumayu.ru/images/favicon.ico" type="image/x-icon" />
</head>
<body>
<?php
	ini_set('session.use_only_cookies', 0);
	session_start();
	require_once __DIR__ . '/facebook-sdk/autoload.php';
	require_once __DIR__ . '/includes/fb-init.php';
	
	if ( !isset($_SESSION['facebook_access_token']) )
	{
		require_once __DIR__ . '/login.php';
	}
	else
	{
		echo "Logged in! ".$_SESSION['facebook_access_token'];
	}
	
?>

</body>
</html>
