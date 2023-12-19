
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>USTYLE - login and sign up</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style type="text/css">
	* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
    margin-top: 155px;
    font-family: 'Arial', 'Helvetica', sans-serif;
    background-color: #ffe2fe; /* Replace with your desired background color */
    /* background-image: url('../img/Bg2.png'); Remove this line */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    /* filter: contrast(100%); Remove this line if not needed */
}


    label {
        font-weight: bold;
    }

    .form-control {
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
        color: #fff;
        font-size: 16px;
        background-color: #007bff;
        transition: background-color 0.3s ease;
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

	<div class="container">
		<div class="row">
			<a href="index.php"><img src="left_arrow.png" style="max-width: 50px; "></a>
			
			<div class="col align-self-center">
				<h3>WELCOME TO</h3>
				<img src="logo.png" width="700">
			</div>
			<div class="col align-self-center">
				<div class="container">
				    <div class="col">
				      <div class="card">
				      	<div class="card-header">
				          <h4 class="text-center">START SHOPPING</h4>
				        </div>
				        <div class="card-body">

				          <form action="" method="POST">
				            <div class="form-group">
				              <label for="username">USERNAME</label>
				              <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter username" required>
				            </div>
				            <br>
				            <div class="form-group">
				              <label for="password">PASSWORD</label>
				              <input type="password" class="form-control" id="pw" name="pw" placeholder="Enter password" required>
				            </div>
				            <br>
				            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
				          </form>

				          	<br>		 
						    <p>Not registered yet? <a href="reg.php">Sign up</a>.</p>	

				        </div>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<footer>
        &copy; 2023 Ustyle. All rights reserved.
    </footer>
<script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 

require 'config.php';


if (isset($_POST['submit'])) {
	$uname = $_POST['uname'];
	$pw = $_POST['pw'];

	$match = mysqli_query($conn, "SELECT * FROM user WHERE username = '$uname'");
	$result = mysqli_fetch_assoc($match);

	if (mysqli_num_rows($match) > 0) {


		if ($pw == $result["password"]) {
		$_SESSION['login'] = true;
		$_SESSION['user_id'] = $result['user_id'];
		$_SESSION['user_type'] = $result['user_type'];
		$_SESSION['username'] = $result['username'];

		$query = mysqli_query($conn, "SELECT `user_type` FROM `user`");
		$result2 = mysqli_fetch_assoc($query);

			if ($_SESSION['user_type'] == "U") {

				header("Location:user.php ");
			}else if($_SESSION['user_type'] == "A"){
				header("Location:admin.php");
			}

			}else{

				echo "<script> alert ('Wrong Password'); </script>";
			}

	}else{

		echo "<script> alert ('User Not Registered'); </script>";
	}
	

}
	
 ?>