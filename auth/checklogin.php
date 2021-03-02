<?php
	$_SESSION['originURL'] = $_SERVER['PHP_SELF'];
	
	if (!isset($_SESSION['account_id']))
	{
		$url = 'Location: /auth/login.php';
		header($url);
		exit();
	}
	else
	{
		if (isset( $_SESSION['last_request_time']))
		{
			$timelive = $_SERVER['REQUEST_TIME'] - $_SESSION['last_request_time'];
			if ($timelive > 60*60)
			{
				session_destroy();
			}
		}
		$_SESSION['last_request_time'] = $_SERVER['REQUEST_TIME'];
	}
?>