<?php
	if (session_id() === '')
	{
		session_start();
	}
	if (isset($_SESSION['originURL']))
		$originURL = 'Location: ' . $_SESSION['originURL'];
	else
	{
		$originURL = 'Location: /index.php';
	}
	
	if (isset($_SESSION['account_id']))		
		header($_SESSION['originURL']);

	if (isset($_POST['signin']))
	{
		require '../backend/dbConnect.php';
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM accounts WHERE username = '$username'";
		$result = pg_query($dbServer, $query);		

		$account = pg_fetch_assoc($result);
		pg_close($dbServer);
		if ($account or is_null($account))
		{
			if ($account['password'] == $password)
			{
				$_SESSION['account_id'] = $account['id'];
				$_SESSION['account_username'] = $account['username'];	
				unset($_SESSION['originURL']);		
				unset($_POST['username']);
				unset($_POST['password']);
				header($originURL);
				exit();
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="/lab5-1644/css/login.css" rel="stylesheet">
  </head>

  <body class="container text-center pt-5 bg-light">
    <form class="w-100 m-auto p-3" style="max-width: 330px;" method="post" action="">
		<img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h1 class="mb-4">Please sign in</h1>
		<input type="username" name="username" class="form-control mb-1" placeholder="Username" required autofocus value="<?php echo isset($_POST['username'])? $username:''; ?>">
		<input type="password" name="password" class="form-control mb-1" placeholder="Password" required>
		<div class="form-check mt-1 mb-3 text-left">
			<input type="checkbox" value="remember-me"> 
			<label for="remember-me"> Remember me</label>
		</div>		
		<?php
			if (isset($_POST['signin']) && !isset($_SESSION['account_id']))
				echo '<p class="text-danger">Wrong account credential</p>';
		?>		
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button>
    </form>

	<footer class="container my-2 pt-5 text-muted text-center">
		<div>
			<p class="mb-1">&copy; 2021 by Nguyen Ky Duong Truong</p>
			<p class="mb-1">All Rights Reserved</p>
		</div>
	</footer>
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