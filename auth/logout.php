<?php
    if (session_id() === '')
        session_start();

    if (isset($_SESSION['account_id']))
    {
        unset($_SESSION['account_id']);
        unset($_SESSION['account_username']);
    }
    else
    {
        echo '<p>user not login</p>';
    }
?>