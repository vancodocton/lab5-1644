<?php
    //echo $_SESSION['account_id'].' '.$_SESSION['account_username'].' '.$_SESSION['account_roleid'];   

    $path = explode("/", $_SERVER['PHP_SELF']);

    if ($path[1] != $_SESSION['path_acess'])
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/permissiondeny.html';
        exit();
    }

?>