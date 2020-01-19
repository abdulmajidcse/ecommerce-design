<!DOCTYPE html>
<html>
<head>
	<title>Web Brand</title>
	<link rel="shortcut icon" type="image/png" href="uploads/brand.png">
	<!--bootstrap css link-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--custom css link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--fontawesome css link-->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>


<!--header-->
<header>
	<nav class="navbar navbar-expand-lg">
		<!--header container div-->
		<div class="container-fluid d-md-flex d-block">
		  <!--brand image and link-->
		  <a class="navbar-brand" href="{{ URL::to('/') }}">
	    	<img src="{{ asset('public/uploads/brand.png') }}" width="50" height="50" class="d-inline-block align-top float-left" alt=""> <h2 class="brandtxt font-weight-bold">WEB BRAND</h2> <p  class="text-dark small"><i>Buy your choose!</i></p>
	  	  </a><!--end of brand image and link-->

	  	  <div class="d-md-flex d-block">
		  	  <!--header search form-->
			  <form class="form-inline">
			    <input class="form-control mr-2" type="search" placeholder="Search Products" aria-label="Search">
			    <button class="btn btn-outline-info" type="submit"><i class="fas fa-search"></i></button>
			  </form><!--end of header search form-->

			  <!-- cart and login-->
			  <p class="p-1 border m-3 p-2 pl-3 pr-3">Cart(<span class="text-danger">Empty</span>)</p>
			  <a href="#"><p class="p-1 m-3 border p-2 pl-4 pr-4 btn-outline-info">Register</p></a>
			  <a href="#"><p class="p-1 m-3 border p-2 pl-4 pr-4 btn-outline-info">Login</p></a>
			  <!--end of cart and login-->
		  </div>

		</div><!--end of header container div-->
	</nav>
</header><!--end of header-->