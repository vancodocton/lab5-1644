<?php
    $hostname = "127.0.0.1";
    $port = 5432;
    $dbName = "postgres";
    $username = "postgres";
    $password = "asdasdas";
    $connectionString = "host=$hostname port=$port dbname=$dbName user=$username password=$password";

    $dbServer = pg_connect($connectionString);
?>