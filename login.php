<?php
	session_start();
	include('backend/dbConnect.php');
	if (isset($_POST['signin'])
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$querry = 'select * from "Accounts" where "Username" = ' + $username;
		$result = pg_query($dbserver, $query);
		
		$account = pg_fetch_row($result);
		if (!$accout or is_null($account))
		{
			if ($account['Password'] == $password)
			{
				echo 'login succeess';
				$_SESSION['account_id'] = $account['d'];
				exit();
			}
			else
			{
				echo 'login failure';				
			}
		}
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Log In page | ATN Company</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/lab5-1644/css/login.css" rel="stylesheet">
  </head>

  <body class="container text-center pt-5 bg-light">
    <form class="w-100 m-auto p-3" style="max-width: 330px;" method="post" action="">
		<img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h1 class="mb-4">Please sign in</h1>
		<input type="username" name="username" class="form-control mb-1" placeholder="Username" required autofocus>
		<input type="password" name="password" class="form-control mb-1" placeholder="Password" required>
		<div class="form-check mt-1 mb-3 text-left">
			<input type="checkbox" value="remember-me"> 
			<label for="remember-me"> Remember me</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button>
    </form>

	<footer class="container my-2 pt-5 text-muted text-center">
		<div>
			<p class="mb-1">&copy; 2019-2020 by Nguyen Ky Duong Truong</p>
			<p class="mb-1">All Rights Reserved</p>
		</div>
	</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>