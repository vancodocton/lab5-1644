<?php 
    if (session_id() === '')
        session_start();
    require "dbConnect.php";

    $name = $_POST['name'];
    $price = $_POST['unitprice'];

    $query = "INSERT INTO Products (Name, UnitPrice) VALUES ('" . $name . "', " . $price . ");";

    pg_query($dbServer, $query);
    pg_close();
    header('Location: '.$_SESSION['originURL']);
    exit();
?>