<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>USTYLE - Home</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>



<style type="text/css">

    body {
        margin: 0;
        font-family: 'Helvetica Neue', sans-serif;
    }

    header {
        padding: 50px 0;
        text-align: center;
        background-image: url('../img/Bg1.png'); /* Updated path to the background image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: contrast(100%); /* Adjust the percentage as needed for contrast */
    }

    h1 {
        font-size: 3rem; /* Adjust the font size */
        font-weight: bold;
        color: #fff; /* White text color */
    }

    p {
        font-size: 1.25rem; /* Adjust the font size */
        font-weight: normal;
        color: #343a40; /* Dark gray text color */
        margin-bottom: 0; /* Remove default bottom margin */
    }

    .btn {
        display: inline-block;
        font-size: 1.25rem; /* Adjust the font size */
        font-weight: bold;
        padding: 10px 20px; /* Adjust the padding */
        margin-top: 20px; /* Adjust the top margin */
        text-decoration: none;
        color: #fff; /* White text color */
        border: 2px solid #fff; /* White border */
        border-radius: 5px; /* Add some border radius */
    }

    .btn:hover {
        background-color: #fff; /* White background color on hover */
        color: #343a40; /* Dark text color on hover */
    }

    /* Navigation Bar */
    .navbar {
        background-color: #f8f9fa; /* Set your background color */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    }

    .navbar-brand img {
        height: 40px; /* Adjust the height of your logo */
    }

    .navbar-toggler {
        border: none; /* Remove border from the toggler button */
    }

    .navbar-nav .nav-link {
        color: #495057; /* Set the color for regular nav links */
    }

    .navbar-nav .nav-link:hover {
        color: #007bff; /* Set the color for nav links on hover */
    }

    /* Optional: Style for the active page */
    .navbar-nav .nav-item.active .nav-link {
        color: #007bff;
    }

    /* Optional: Style for the dropdown */
    .navbar-nav .nav-item.dropdown:hover .nav-link {
        color: #007bff;
    }

    /* Optional: Style for the search form */
    .form-control {
        border-radius: 0; /* Remove border-radius for a more modern look */
    }

    /* Optional: Style for the search button */
    .btn-outline-success {
        border-color: #811c4e; /* Set the border color for the search button */
        color: #811c4e; /* Set the text color for the search button */
    }

    .btn-outline-success:hover {
        background-color: #f092a5; /* Set the background color on hover */
        color: #fff; /* Set the text color on hover */
    }

		.btn1 {
  display: inline-block;
  background-color: transparent; /* Set your desired background color */
  color: #343a40; /* Set your desired text color */
  padding: 10px 15px; /* Set padding as needed */
  border: none;
	border: 2px solid #343a40; /* White border */
  border-radius: 5px; /* Adjust border-radius for rounded corners */
  cursor: pointer;
}

.btn1:hover {
  background-color: #f092a5; /* Set your desired hover background color */
}

/* Adjust the following styles if needed */
.btn1 svg {
  margin-right: 3px; /* Adjust spacing between icon and text */
}

    /* Section Bar */
    section {
    background-color: #ffe2fe; /* Set your desired background color */
    padding: 50px 0; /* Adjust the padding as needed */
    
}

.card {
    border: 2px solid #811c4e; /* Modify border color for the card */
    border-radius: 10px; /* Adjust border-radius as needed */
    transition: transform 0.3s; /* Add a smooth transition effect */
}

.card:hover {
    transform: scale(1.05); /* Enlarge the card on hover */
}

.card-img-top {
    max-height: 200px; /* Set the maximum height for the product image */
    object-fit: cover; /* Ensure the image covers the entire container */
}

.card-body {
    text-align: center; /* Center align the content in the card body */
}

.btn-outline-dark {
    color: #343a40; /* Set text color for the button */
    border-color: #343a40; /* Set border color for the button */
}

.btn-outline-dark:hover {
    color: #fff; /* Change text color on button hover */
    background-color: #f092a5; /* Change background color on button hover */
}

/*footer bar*/
footer {
  background-color: #333; /* Set the background color */
  color: #fff; /* Set the text color */
  padding: 20px; /* Add some padding to the footer */
  text-align: center; /* Center-align text */
}

#footer-content {
  max-width: 600px; /* Set a maximum width for the content */
  margin: 0 auto; /* Center the content within the footer */
	color: #f8f9fa;
}
#footer-content p {
    font-size: 15px;
    line-height: 1;
    margin-bottom: 10px;
		color: lightgray;
}



</style>


	

        

<body>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	     <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="Logo" class="navbar-logo"></a>
	   		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	  <span class="navbar-toggler-icon"></span>
	    	</button>

			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">Home</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="about_us.html">About Us</a>
			        </li>
			        <li class="nav-item dropdown">
			            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
			            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			                <li><a class="dropdown-item" href="#!">All Products</a></li>
			                <li><hr class="dropdown-divider" /></li>
			                <li><a class="dropdown-item" href="#!">Sale</a></li>
			            </ul>
			        </li>
			          
			        
			        <li class="nav-item">
			            <a href="login.php" class="nav-link" > Sign In</a>
			        </li>
			        <li class="nav-item">
			            <a href="reg.php" class="nav-link"> Sign Up</a>
			        </li>
							<li class="nav-item">
			          <button class="btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
			              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
			            </svg></i></button>
			        </li>
			      </ul>

	      	<form class="d-flex" role="search">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>

	<header class="bg-dark py-5">
	    <div class="container px-10 px-lg-10 my-5">
	        <div class="text-center text-white">
	            <h1 class="display-1 fw-bolder">CHOOSE YOUR STYLE</h1>
	            <p class="lead fw-normal text-white-50 mb-0">FIND YOUR STYLE</p>
	        </div>
	        <div class="text-center pt-4"> 
	        	<a class="btn btn-outline-light" href="home.html">SHOP NOW</a>
	        </div>
	        
	    </div>
	</header>

	<section class="">
		<div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../img/shirt1.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Cotton Shirt</h5>
                                    <!-- Product price-->
                                    Php 500.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Start Customizing</a></div>
                            </div>
                        </div>
                    </div>
	</section>

	<footer>
        <div id="footer-content">
            <h2>About Us</h2>
            <p> At Ustyle, we're more than just a T-shirt customization website; we're a community of individuals who believe in the power of personalized fashion.  
<br> Let's turn your wardrobe into a canvas of creativity, one personalized T-shirt at a time!</p>
						<h4>Contact Us</h4>
            <p>Email: ustyle@gmail.com</p>
            <p>Phone: +123 456 7890</p>
						&copy; 2023 Ustyle. All rights reserved.
        </div>
				
    </footer>

<!-- Bootstrap core JS-->
<script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</body>
</html>

