<?php
    if (session_id() === '')
    {
        session_start();
    }
	require './auth/checkLogin.php';
	// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) 
	// {
	// 	$uri = 'https://';
	// } else 
	// {	
	// 	$uri = 'http://';
	// }
	// $uri .= $_SERVER['HTTP_HOST'];
	// header('Location: ' . $uri . '/sample-sidebar/');
?>
<p>ATN Company</p>
<button type="button" class="btn btn-primary" onclick="location.href ='./auth/logout.php'">logout</button>