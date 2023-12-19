<?php 

require 'config.php';


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
 	<title>USTYLE - Cart</title>

 </head>
 <style type="text/css">

 	.navbar-logo{
        max-width: 100px;
    }

     footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
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
			          <a class="nav-link " aria-current="page" href="user.php">Home</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="about.php">About Us</a>
			        </li>   
			        <!--<li class="nav-item">
			          <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
			              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
			            </svg></i></button>
			        </li>-->
			        <li class="nav-item">
			            <a href="cart.php" class="nav-link active"> Cart</a>
			        </li>
			        <li class="nav-item">
			            <a href="account.php" class="nav-link"> Account</a>
			        </li>
			        <li class="nav-item">
			            <a href="logout.php" class="nav-link"> Logout</a>
			        </li>
			      </ul>

	      	<form action="search.php" method="GET" class="d-flex" role="search">
		        <input class="form-control me-2" name="searchTerm" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" name="search" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>

<?php

	if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if the product is added to the cart
if (isset($_POST['cart'])) {
    $color = $_POST['color'];
    $size = $_POST['size'];
    $prod_price = $_POST['prod_price'];
    $qty = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

     $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    // Move uploaded image to a folder on the server
    $uploadPath = 'uploads/';
    $targetFile = $uploadPath . basename($image);

    move_uploaded_file($tempImage, $targetFile);

    // Check if the product is already in the cart
    $productIndex = array_search($color, array_column($_SESSION['cart'], 'id'));

    if ($productIndex !== false) {
        // Update the quantity if the product is already in the cart
        $_SESSION['cart'][$productIndex]['quantity'] += $qty;
    } else {
        // Add the product to the cart
        $_SESSION['cart'][] = [
            'id' => $color,
            'name' => $size,
            'price' => $prod_price,
            'quantity' => $qty,
            'img' => $image,

        ];

    
    }
}

/*if (isset($_POST['cart'])) {


    $Color = $_POST['color'];
    $Size = $_POST['size'];

            

    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    // Move uploaded image to a folder on the server
    $uploadPath = 'uploads/';
    $targetFile = $uploadPath . basename($image);

    move_uploaded_file($tempImage, $targetFile);
    // Insert image information into the database
    //$sql = "INSERT INTO designs (design_img) VALUES ('$targetFile')";
    /*if ($conn->query($sql) === TRUE) {
        echo "Image uploaded and stored in the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/

   /* echo "<img src='uploads/$image' width='100' height='100'>";
    echo "<p>color selected: $Color</p>";
    echo "<p>size selected: $Size</p>";
    echo "<p>price: Php250.00</p>";

*/
if (isset($_POST['clear_cart'])) {
    // Clear the cart
    $_SESSION['cart'] = [];
}


//}

?>

<h1>Shopping Cart</h1>
    <ul>
        <?php
        $totalPrice = 0;
         foreach ($_SESSION['cart'] as $item) :

         		$totalPrice += $item['price'] * $item['quantity'];
          ?>
        	
            <li>
            	<?php echo "<img src='uploads/'{$item['image']}' width='100' height='100'>"; ?>

                <?php echo $item['name'] . "-" . $item['id'] ; ?> - $<?php echo number_format($item['price'] * $item['quantity'], 2); ?> 
                (Quantity: <?php echo $item['quantity']; ?>)

            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Display the total price -->
<p>Total Price: $<?php echo number_format($totalPrice, 2); ?></p>

<form method="post" action="">
        <button type="submit" name="clear_cart">Clear Cart</button>
    </form>

    <footer>
        &copy; 2023 Ustyle. All rights reserved.
    </footer>
<!-- Bootstrap core JS-->
<script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

 </body>
 </html>
 