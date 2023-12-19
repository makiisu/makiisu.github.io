<?php
include_once('config.php'); 

// Redirect to login if the user is not authenticated
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$id = $_SESSION['user_id'];
$query = mysqli_query($conn, "SELECT `username` FROM `user` WHERE `user_id` = '$id'");
$row = mysqli_fetch_assoc($query);

//$_SESSION['user'] = $row['username'];
    //`product_id`, `size`, `color`, `order_qty`, `order_price`, `order_img`
//$query2 = "SELECT `order_code` FROM `order` WHERE `user_id` = '$id'";
//$query3 = mysqli_query($conn, $query2);
//$row = mysqli_fetch_assoc($query3);
 ?>

<?php 
$id = $_SESSION['user_id'];
// Fetch data from the product table
$query = "SELECT `order_code`, `product_id`, `size`, `color`, `order_qty`, `order_price`, `order_img`, `order_stat` FROM `orders` WHERE `user_id` = '$id'";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die('Error: ' . mysqli_error($conn));
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $row['username']; ?>!</h2>
    <p>This is your user dashboard.</p>
    <a href="logout.php">Logout</a>
    <a href="user.php">Home</a>
    <a href="custom.php">Order Again</a>
    <p>ORDERS:</p>

    <p>PENDING:</p>
    <table border="5">
        <thead>
            <tr>
                <th>Order Code </th>
                <th>Product Id </th>
                <th>Size </th>
                <th>Color </th>
                <th>Quantity </th>
                <th>Price </th>
                <th>Status</th>
                <th>Image</th>
            </tr>
        </thead>
        <?php 

        while ($row1 = mysqli_fetch_assoc($result)) {
        //$row1 = mysqli_fetch_assoc($result);

            if ($row1['order_stat'] == "P") {
                echo "<tr>";
                echo "<td>{$row1['order_code']}</td>";
                echo "<td>{$row1['product_id']}</td>";
                echo "<td>{$row1['size']}</td>";
                echo "<td>{$row1['color']}</td>";
                echo "<td>{$row1['order_qty']}</td>";
                echo "<td>{$row1['order_price']}</td>";
                echo "<td>{$row1['order_stat']}</td>";
                echo "<td>"."<img src= ".'uploads/'.$row1['order_img']." width='100' height='100' /> <br>"."</td>";
            echo "</tr>";

            }
            
        }
         ?>
    </table>


    <?php 
$id = $_SESSION['user_id'];
// Fetch data from the product table
$query = "SELECT `order_code`, `product_id`, `size`, `color`, `order_qty`, `order_price`, `order_img`, `order_stat` FROM `orders` WHERE `user_id` = '$id'";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die('Error: ' . mysqli_error($conn));
}
 ?>
    <p>DELIVERED:</p>
    <table border="5">
        <thead>
            <tr>
                <th>Order Code </th>
                <th>Product Id </th>
                <th>Size </th>
                <th>Color </th>
                <th>Quantity </th>
                <th>Price </th>
                <th>Status</th>
                <th>Image</th>
            </tr>
        </thead>
        <?php 

        while ($row1 = mysqli_fetch_assoc($result)) {
        //$row1 = mysqli_fetch_assoc($result);

            if ($row1['order_stat'] == "D") {
                echo "<tr>";
                echo "<td>{$row1['order_code']}</td>";
                echo "<td>{$row1['product_id']}</td>";
                echo "<td>{$row1['size']}</td>";
                echo "<td>{$row1['color']}</td>";
                echo "<td>{$row1['order_qty']}</td>";
                echo "<td>{$row1['order_price']}</td>";
                echo "<td>{$row1['order_stat']}</td>";
                echo "<td>"."<img src= ".'uploads/'.$row1['order_img']." width='100' height='100' /> <br>"."</td>";
            echo "</tr>";

            }
            
        }
         ?>
    </table>


    <?php 
$id = $_SESSION['user_id'];
// Fetch data from the product table
$query = "SELECT `order_code`, `product_id`, `size`, `color`, `order_qty`, `order_price`, `order_img`, `order_stat` FROM `orders` WHERE `user_id` = '$id'";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die('Error: ' . mysqli_error($conn));
}
 ?>
    <p>CANCELLED:</p>
    <table border="5">
        <thead>
            <tr>
                <th>Order Code </th>
                <th>Product Id </th>
                <th>Size </th>
                <th>Color </th>
                <th>Quantity </th>
                <th>Price </th>
                <th>Status</th>
                <th>Image</th>
            </tr>
        </thead>
        <?php 

        while ($row1 = mysqli_fetch_assoc($result)) {
        //$row1 = mysqli_fetch_assoc($result);

            if ($row1['order_stat'] == "C") {
                echo "<tr>";
                echo "<td>{$row1['order_code']}</td>";
                echo "<td>{$row1['product_id']}</td>";
                echo "<td>{$row1['size']}</td>";
                echo "<td>{$row1['color']}</td>";
                echo "<td>{$row1['order_qty']}</td>";
                echo "<td>{$row1['order_price']}</td>";
                echo "<td>{$row1['order_stat']}</td>";
                echo "<td>"."<img src= ".'uploads/'.$row1['order_img']." width='100' height='100' /> <br>"."</td>";
            echo "</tr>";

            }
            
        }
         ?>
    </table>

<?php
$id = $_SESSION['user_id'];

$query = "SELECT SUM(order_price) AS total_price FROM orders WHERE order_stat = 'D' and user_id = '$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error: ' . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$totalPrice = $row['total_price'];

echo "TOTAL PRICE: Php $totalPrice";

mysqli_free_result($result);
mysqli_close($conn);
?>

</body>
</html>