<?php
	echo $_SERVER['PHP_SELF'];
    if (session_id() === '')
        session_start();
	require './auth/checklogin.php';
	switch ($_SESSION['account_roleid'])
    {
        case 1:
            $url = 'Location: /com/dashboard.php';
            break;
        case 2:
            $url = 'Location: /store/dashboard.php';
            break;
        default:
            require $_SERVER['DOCUMENT_ROOT'] . '/permissiondeny.html';
            exit();
    }
	header($url);
	exit();
?>
<p>ATN Company</p>
<button type="button" class="btn btn-primary" onclick="location.href ='./auth/logout.php'">logout</button>