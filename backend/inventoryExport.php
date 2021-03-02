<?php 
    if (session_id() === '')
        session_start();
    require "dbConnect.php";

    $productId = $_POST['productid'];
    $storeId = $_SESSION['storeid'];
    $quantityExport = $_POST['productquantity'];

    $query = "SELECT quantity FROM Storeinventory WHERE ProductId = " . $productId . " AND StoreID = " . $storeId . ";";
    $quantityOld = pg_fetch_assoc(pg_query($dbServer, $query))['quantity'];
    $quantityNew = $quantityOld - $quantityExport;

    $query = "UPDATE StoreInventory SET Quantity = " . $quantityNew . " WHERE StoreId = " . $storeId . " AND ProductId = " . $productId . ";";
    pg_query($dbServer, $query);
    pg_close();
    header('Location: '.$_SESSION['originURL']);
    exit();
?>