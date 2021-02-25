<?php
    if (session_id() === '')
    {
        session_start();
    }    
    if (!isset($_SESSION['account_id']))
    {
        $uri = $_SERVER['HTTP_HOST'];
        $header = 'Location: auth/login.php';
        echo $header;
        header($header);
        exit;
    }
?>