<?php
	require '../backend/dbConnect.php';
	
	$query = "SELECT p.id, p.name, ci.quantity, ci.time from products as p left join companyinventory as ci on ci.productid = p.id order by p.id;";
	$result = pg_query($dbServer, $query);
	$stocks = pg_fetch_all($result, PGSQL_ASSOC);
	
	pg_close($dbServer);
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body>
	<table class="table table-responsive-md table-striped">
		<caption>List of Toy Stores</caption>
		<thead>
			<tr>
			<th scope="col">ProductId</th>
			<th scope="col">Product Name</th>
			<th scope="col">Quantity</th>
			<th scope="col">Last Update Time</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($stocks as $stock) :?>
				<tr>
					<th scope="row"><?php echo htmlspecialchars($stock['id']) ?></th>
					<td><?php echo htmlspecialchars($stock['name'])?></td>
					<td><?php echo htmlspecialchars($stock['quantity'])?></td>
					<td><?php echo htmlspecialchars($stock['time'])?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	-->
</body>
</html>
