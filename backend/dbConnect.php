<?php
    $hostname = "ec2-54-157-149-88.compute-1.amazonaws.com";
    $port = 5432;
    $dbName = "damkvqjigb97iu";
    $username = "elildunpndkouv";
    $password = "124fc1e3fef5429577a8361bc7b68b50a978c5f8cbe3d356e282448dee796863";
    $connectionString = "host=$hostname port=$port dbname=$dbName user=$username password=$password";

    $dbServer = pg_connect($connectionString);
?>