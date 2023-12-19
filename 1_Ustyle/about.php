<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<title>USTYLE - About Us</title>
</head>
<style type="text/css">
	
	body{
		background-color: black;
		background-size: cover;
        background-repeat: no-repeat;
	}
	.navbar-logo{
        max-width: 100px;
    }

     footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: static;
            bottom: 0;
            width: 100%;
        }

     .image{
     	 display: block;
     	 margin-left: 65px;
  		 width: 100%;
     }
</style>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	     <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo" class="navbar-logo"></a>
	   		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	  <span class="navbar-toggler-icon"></span>
	    	</button>

			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link " aria-current="page" href="index.php">Home</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link active" href="about.php">About Us</a>
			        </li>
			        <li class="nav-item">
			            <a href="login.php" class="nav-link" > Sign In</a>
			        </li>
			        <li class="nav-item">
			            <a href="reg.php" class="nav-link"> Sign Up</a>
			        </li>
			      </ul>

	      	<form class="d-flex" role="search">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>

	<div class="image">
		<img src="about_us.png">
	</div>
	

<footer>
        &copy; 2023 Ustyle. All rights reserved.
    </footer>
<script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>