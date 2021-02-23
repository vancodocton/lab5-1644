<?php
    if (!isset($_SESSION['account_id']))
    {
        $uri = $_SERVER['HTTP_HOST'];
        header('Location: ' . $uri . '/lab5-1644/login.php');
    }
?>