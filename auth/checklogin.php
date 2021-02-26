<?php
	if (!isset($_SESSION['account_id']))
	{
		$_SESSION['originURL'] = $_SERVER['PHP_SELF'];
		$url = 'Location: /auth/login.php';
		header($url);
		exit();
	}
	else
	{
		if (isset( $_SESSION['last_request_time']))
		{
			$timelive = $_SERVER['REQUEST_TIME'] - $_SESSION['login_time_stamp'];
			if ($timelive > 60*60)
			{
				session_destroy();
			}
		}
		$_SESSION['last_request_time'] = $_SESSION['login_time_stamp'];
	}
?>