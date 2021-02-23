<?php
	include 'dbConnect.php';
	
	echo $connectionstring;
	
	
	pg_close($connectionstring);
	
?>