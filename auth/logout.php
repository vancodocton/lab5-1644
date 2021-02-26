<?php
    if (session_id() === '')
        session_start();

    if (isset($_SESSION['account_id']))
    {
        // unset($_SESSION['account_id']);
        // unset($_SESSION['account_username']);
        // unset($_SESSION['account_roleid']);
        // unset($_SESSION['last_request_time']);
        session_destroy();
        header('Location: /auth/login.php');
    }   
    exit();
?>