<?php
    if (session_id() === '')
        session_start();

    if (isset($_SESSION['account_id']))
    {
        unset($_SESSION['account_id']);
        unset($_SESSION['account_username']);
        unset($_SESSION['account_roleid']);
        header('Location: /auth/login.php');
    }   
    exit();
?>