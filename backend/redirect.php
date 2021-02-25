<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) 
	{
		$uri = 'https://';
	} else 
	{	
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: ' . $uri . '/lab5-1644/');
	exit;
?>
<p>Something is wrong with the server</p>