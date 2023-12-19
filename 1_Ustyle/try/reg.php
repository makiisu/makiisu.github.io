<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>USTYLE - Register</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style type="text/css">

	body {
	    font-family: Arial;
	    background-color: #ffe2fe;
	    margin-top: 25px;
	    padding: 0;
	  }

	form {
	    max-width: 500px;
	    margin: 0 auto;
	    background: #fff;
	    padding: 20px;
	    border-radius: 10px;
	    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	  }
  
	  .mb-3 {
	    margin-bottom: 15px;
	  }
	  
	  label {
	    font-weight: bold;
	  }
	  
	  .form-control {
	  	width: auto;
	    padding: 10px;
	    margin-top: 5px;
	    margin-bottom: 10px;
	    border: 1px solid #ccc;
	    border-radius: 10px;
	  }
	  
	  .btn {
	    display: block;
	    width: 100%;
	    padding: 10px;
	    border: none;
	    border-radius: 5px;
	    cursor: pointer;
	    background-color: #2011ea;
	    color: #fff;
	    font-size: 16px;
	  }
	  
	  .btn:hover {
	    background-color: #f2eee7;
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
	
	<div class="container">
		<div class="row">
			<div class="col align-self-center">
				<h3>REGISTER TO</h3>
				<img src="../img/logo.png" width="700">
			</div>
			<div class="col align-self-center">
				<form action="reg.php" method="post">
				  <div class="mb-3">
				    <label for="">First Name 
				      <input type="text" class="form-control" id="fname" name="fname" required>
				    </label>

				    <label for="">Last Name 
				      <input type="text" class="form-control" id="lname" name="lname" required>
				    </label>
				  </div>
				    
				  <div class="mb-3">
				    <label for="">Address
				      <input type="text" class="form-control" id="address" name="address" required>
				    </label>
				  </div>
				  <div class="mb-3">
				    <label for="">Phone Number 
				      <input type="number" class="form-control" id="phone" name="phone" required>
				    </label>
				    <label for="">Birthday 
				      <input type="date" class="form-control" id="bday" name="bday" required>
				    </label>
				  </div>
				  <div class="mb-3">
				    <label for="">Username 
				      <input type="text" class="form-control" id="uname" name="uname" required>
				    </label>
				    <label for="">Email 
				      <input type="email" class="form-control" id="email" name="email" required>
				    </label>
				  </div>
				  <div class="mb-3">
				    <label for="">Password 
				      <input type="password" class="form-control" id="pass1" name="pass1" required>
				    </label>
				  </div>
				  <div class="mb-3">
				    <label for="">Confirm Password
				      <input type="password" class="form-control" id="pass2" name="pass2" required>
				    </label>
				  </div>
				  <div class="mb-3">
				    <input type="submit" name="submit" class="btn btn-success">
				  </div>

				  <p>Already have an account? <a href="login.php">Log in</a></p>

				</form>

				</div>
			</div>
		</div>
	</div>
	
	<br>


	<footer>
        &copy; 2023 Ustyle. All rights reserved.
    </footer>
<script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php  
require 'config.php';
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$add = $_POST['address'];
	$contact = $_POST['phone'];
	$bday = $_POST['bday'];
	$uname = $_POST['uname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$pw = $_POST['pass1'];
	$cpw = $_POST['pass2'];

	$duplicate = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

	if(mysqli_num_rows($duplicate) > 0){

		echo "<script> alert('Email is Already used'); </script>";

	}else{

		if($pw == $cpw){
			$query = ("INSERT INTO user VALUES ('','$uname','$pw','$email','$fname','$lname','$add','$phone','$bday','U')");

			mysqli_query($conn, $query);
			echo "<script> alert ('Registration Successful'); </script>";
			//header("Location: login.php");
		}else{
			echo "<script> alert ('Password Does Not Match'); </script>";
		}
	}

}

?>

