<?php
    if (session_id() === '')
    {
        session_start();
    }    
    if (!isset($_SESSION['account_id']))
    {
        $_SESSION['originURL'] = $_SERVER['PHP_SELF'];
        $url = 'Location: /auth/login.php';
        header($url);
        exit;
    }
?>