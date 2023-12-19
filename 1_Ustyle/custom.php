<?php include_once('config.php'); 
//session_start();
//echo $_SESSION['user_info'];
if(!isset($_SESSION['user_id'])){
  header("location: index.php?msg=no_user_found");   
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/fabric@5.3.0/dist/fabric.min.js"></script>
    <title>USTYLE - Custom Cotton Shirt</title>
</head>
<style type="text/css">
    
    .navbar-logo{
        max-width: 100px;
    }

    body {
        font-family: Arial, sans-serif;
        text-align: left;
        background-image: url("try/Bg1.png"); /* Updated path to the background image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: contrast(100%); /* Adjust the percentage as needed for contrast */

            
    }

        .container {
    max-width: 800px;
    margin: 20px auto;
    }
    .row {
        display: flex;
        justify-content: space-between;
    }

    .col {
        flex: 1;
        margin-right: 20px;
    }

    #color-selector,
    #size-selector {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

        .drawing-area {
            position: absolute;
            top: 60px;
            left: 75px;
            z-index: 10;
            width: 250px;
            height: 405px;
            border: 2px solid lightgreen;
        }

        
        #tshirt-div {
            position: relative;
            width: 400px;
            height: 500px;
            border: 2px solid #333;
            background: #fff;
        }

        #shirt {
            max-width: 100%;
            max-height: 100%;
        }

        .drawing-area {
            position: absolute;
            top: 60px;
            left: 75px;
            z-index: 10;
            width: 250px;
            height: 405px;
            border: 2px solid lightgreen;
        }

        #color-selector {
            margin-bottom: 20px;
        }

        #tshirt-div {
            position: relative;
            width: 400px;
            height: 500px;
            border: 2px solid #333;
            background: #fff;
        }

        #shirt {
            max-width: 100%;
            max-height: 100%;
        }

.title {
      background-color: #333;
      color: #fff;
      text-align: center;
      
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
                      <a class="nav-link active" aria-current="page" href="user.php">Home</a>
                    </li>
                    
                    <!--<li class="nav-item">
                      <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg></i></button>
                    </li>-->
                    <li class="nav-item">
                        <a href="cart.php" class="nav-link" > Cart</a>
                    </li>
                    <li class="nav-item">
                        <a href="Account.php" class="nav-link"> Account</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link"> logout</a>
                    </li>
                  </ul>
        </div>
      </div>
    </nav>

    <div class="title">
        <h1>CUSTOMIZE YOUR SHIRT</h1>
    </div>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="color-selector">
                    <label for="color">Select Color: </label>
                    <select id="color" name="color" onchange="changeShirtColor()">
                        <option value="white">White</option>
                        <option value="light brown">Light brown</option>
                        <option value="brown">Dark Brown</option>
                        <option value="black">Black</option>
                    </select>
                </div>

                <div id="size-selector">
                    <label for="size">Select Size: </label>
                    <select id="size" name="size">
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" value="1" min="1">
                
            </div>
            <div class="col">
                <label for="tshirt-custom">Upload your own design:</label>
                <input type="hidden" name="prod_price" value="250.00">
                <input type="file" name="image" id="image_input" accept="image/*" required>

                <div id="tshirt-div">
                    <img id="shirt" src="shirtW.png">

                    <div id="drawingArea" class="drawing-area">
                        <div class="canvas-container">
                            <canvas id="tshirt-canvas" width="250px" height="405px"></canvas>
                            <button name="remove" onclick="removeImage()">Remove Image</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <button type="button" onclick="saveDesign()" name="save" class="btn btn-primary btn-block">Save Design</button>
        <button type="submit" name="cart" class="btn btn-primary btn-block">Add to Cart</button>
        <button type="submit" name="checkout" class="btn btn-primary btn-block">Check Out</button>
   
</form>

<script>
    function changeShirtColor() {
        const colorSelector = document.getElementById('color');
        const shirt = document.getElementById('shirt');

        // Get the selected color value
        const selectedColor = colorSelector.value;

        // Update the shirt color
        switch (selectedColor) {
            case 'white':
                shirt.src = 'shirtW.png';
                break;
            case 'light brown':
                shirt.src = 'shirtLB.png';
                break;
            case 'brown':
                shirt.src = 'shirtBR.png';
                break;
            case 'black':
                shirt.src = 'shirtBL.png';
                break;
            default:
                shirt.src = 'shirtW.png'; // Default to white
        }
    }

    // overlap image design to shirt
    document.getElementById('image_input').addEventListener('change', handleImage, false);

    var canvas = new fabric.Canvas('tshirt-canvas', {
        backgroundColor: 'transparent',
        selection: false
    });

    function handleImage(e) {
        var reader = new FileReader();
        reader.onload = function (event) {
            var imgObj = new Image();
            imgObj.src = event.target.result;

            imgObj.onload = function () {
                 var canvasWidth = canvas.getWidth();
                var imgScaleFactor = canvasWidth / imgObj.width;
                var fabricImage = new fabric.Image(imgObj, {
                    scaleX: imgScaleFactor,
                    scaleY: imgScaleFactor,
                    selectable: true,
                    hasControls: true,
                    hasBorders: true,
                });

                canvas.centerObject(fabricImage);
                canvas.add(fabricImage);
                canvas.renderAll();

                function removeImage() {
                    var removeButton = document.createElement('remove');
                    var activeObject = canvas.getActiveObject();
                    if (activeObject) {
                        canvas.remove(activeObject);
                    };
                    document.body.appendChild(removeButton);
                };

                
            };
        };
        reader.readAsDataURL(e.target.files[0]);
    }

    function saveDesign() {
    const colorSelector = document.getElementById('color');
    const shirt = document.getElementById('shirt');

    // Get the selected color value
    const selectedColor = colorSelector.value;

    // Create a new canvas to merge the images
    var mergedCanvas = new fabric.Canvas('merged-canvas', {
        backgroundColor: 'transparent',
        width: 400,
        height: 500,
        selection: false
    });

    // Load the shirt color onto the merged canvas
    var shirtColorImage = new fabric.Image(shirt, {
        
    });

    shirtColorImage.scaleToHeight(500);
    shirtColorImage.scaleToWidth(400);
    mergedCanvas.centerObject(shirtColorImage);
    mergedCanvas.add(shirtColorImage);

    // Load the uploaded image directly onto the merged canvas
    var uploadedImage = canvas.getActiveObject();
    if (uploadedImage) {
        uploadedImage.clone(function (clonedImage) {
            clonedImage.set({
                top: 30,
   

            });
     
            mergedCanvas.centerObject(clonedImage);
            mergedCanvas.add(clonedImage);
            mergedCanvas.renderAll();

            // Optionally, you can save or display the merged image as needed
            let mergedImageURL = mergedCanvas.toDataURL();
            console.log("Merged Image URL:", mergedImageURL);
        });


    }
}



</script>
<footer>
        &copy; 2023 Ustyle. All rights reserved.
    </footer>
    
<!-- Bootstrap core JS-->
<script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "u-style_db");

if (isset($_POST['checkout'])) {

$id = $_SESSION['user_id'];

    $Color = $_POST['color'];
    $Size = $_POST['size'];
    $Qty = $_POST['quantity'];
    $price = 250;
    $totalPrice = $Qty * $price;
    
            

    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];
    // Move uploaded image to a folder on the server
    $uploadPath = 'uploads/';
    $targetFile = $uploadPath . basename($image);

    move_uploaded_file($tempImage, $targetFile);
    $code = $id . $Qty . $Size . $totalPrice . $Color;


    // Insert image information into the database
    /*$sql = "INSERT INTO designs (design_img) VALUES ('$targetFile')";
    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded and stored in the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/

    //echo "<img src='uploads/$image' width='100' height='100'>";

    
    // Echo the selected value
            /*echo "<p>color selected: $Color</p>";
            echo "<p>size selected: $Size</p>";
            echo "<p>quantity: $Qty</p>";
             echo "<p>price: $totalPrice</p>";*/

    $sql = ("INSERT INTO orders VALUES ('','$code','$id','1','$Size','$Color','$Qty','$totalPrice','$image','P')");
    if ($conn->query($sql) === TRUE) {
        echo "<script> alert ('Added to orders successfully.'); </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
