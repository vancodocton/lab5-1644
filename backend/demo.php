<?php 

echo 'hell o ';
	include('dbconnect.php');
	$account = "admin1";
	$querry = "select * from Accounts where Username ='$account'";
	$result = pg_query($dbserver, $query);
	
	$account = pg_fetch_row($result);
	echo "123";
	if (is_null($account) || !$account)
	{
		echo $account['id'];
		echo "456";
	}
	echo "789";
	pg_close($dbServer);
?>