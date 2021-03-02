<?php 
    if (session_id() === '')
        session_start();
    require "dbConnect.php";

    $id = $_POST['productid'];
    $newprice = $_POST['newunitprice'];

    $query = "UPDATE products SET unitprice = " . $newprice . " WHERE id = " . $id . ";";

    pg_query($dbServer, $query);
    pg_close();
    header('Location: '.$_SESSION['originURL']);
    exit();
?>