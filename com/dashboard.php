<?php
    if (session_id() === '')
        session_start();
    require '../backend/dbConnect.php';
    require '../auth/checklogin.php';
    require '../auth/checkpermission.php';
    
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Dashboard | ATN Comapny</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <style>
        aside a
        {
            color: white;
        }
    </style>
</head>
<body class="bg-light">
	<!-- Navigation bar -->
    <header class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                ATN Company
                <a type="button" class="btn btn-primary" data-toggle="collapse" data-target="#sidebar" aria-expanded="true" aria-controls="sidebar">Sidebar</a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navibar" aria-controls="navibar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navibar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link active" id="logout" href="../auth/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    
    <div class="row container-fluid">
		<!-- Side bar -->
        <aside class="col-lg-2 col-md-3 bg-secondary pt-2 collapse show" id="sidebar">
            <div class="">
				<ul class="list-group list-group-flush d-flex">
					<li class="list-group-item bg-secondary border-white text-white">
                        <a type="button">Dashboard</a>
                        <nav class="nav flex-column">
                            <a type ="button" class="nav-link" onclick="loadStores()">Stores List</a>
                            <a type ="button" class="nav-link" onclick="loadProducts()">Products List</a>
                            <a type ="button" class="nav-link" onclick="loadCompanyInventory()">Company Inventory</a>
                        </nav>
                    </li>
                    <a type="button" class="list-group-item bg-secondary border-white text-white" href="management.php">
                        Management
                    </a>
				</ul>
			</div>
        </aside>
		<!-- Page content -->
        <main class="col-lg-10 col-md-9 pt-2">
            <div class="container-fluid">
				<div id="table-content">

				</div>
            </div>
        </main>
    </div>

    <footer>

    </footer>
     <!-- Optional JavaScript; choose one of the two! -->
     <script>
		loadStores();
		function loadStores()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
					document.getElementById("table-content").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "../backend/loadStores.php", true);
			xhttp.send();
		}
		function loadProducts()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
					document.getElementById("table-content").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "../backend/loadProducts.php", true);
			xhttp.send();
		}
		function loadCompanyInventory()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
					document.getElementById("table-content").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "../backend/loadCompanyInventory.php", true);
			xhttp.send();
		}
        // $( window ).resize(function() {
        //     if ($(window).width() < 768)
        //         $('#sidebar').collapse('hide');
        //     else
        //         $('#sidebar').collapse('show');
        // });
    </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->

</body>
</html>