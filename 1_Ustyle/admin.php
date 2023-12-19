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
?>

<?php 
// Fetch data from the product table
$query = "SELECT `order_code`, `user_id`, `product_id`, `size`, `color`, `order_qty`, `order_price`, `order_img`, `order_stat` FROM `orders`";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die('Error: ' . mysqli_error($conn));
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> USTYLE - Admin</title>
</head>
<body>
<h2>Welcome, <?php echo $row['username']; ?>!</h2>
    <p>This is your user dashboard.</p>
    <a href="logout.php">Logout</a>

    <table border="5">
        <thead>
            <tr>
                <th>Order Code </th>
                <th>user_id</th>
                <th>Product Id </th>
                <th>Size </th>
                <th>Color </th>
                <th>Quantity </th>
                <th>Price </th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php 

        while ($row1 = mysqli_fetch_assoc($result)) {
        //$row1 = mysqli_fetch_assoc($result);

            
                echo "<tr>";
                echo "<td>{$row1['order_code']}</td>";
                echo "<td>{$row1['user_id']}</td>";
                echo "<td>{$row1['product_id']}</td>";
                echo "<td>{$row1['size']}</td>";
                echo "<td>{$row1['color']}</td>";
                echo "<td>{$row1['order_qty']}</td>";
                echo "<td>{$row1['order_price']}</td>";
                echo "<td>{$row1['order_stat']}</td>";
                echo "<td>"."<img src= ".'uploads/'.$row1['order_img']." width='100' height='100' /> <br>"."</td>";

                echo "<td>";
            echo "<form action='update_stat.php' method='post'>";
            echo "<input type='hidden' name='order_code' value='{$row1['order_code']}'>";
            echo "<select name='action'>";
            echo "<option value='D'>Deliver</option>";
            echo "<option value='C'>Cancel</option>";
            echo "</select>";
            echo "<button type='submit'>Update</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
            echo "</tr>";


            
            
        }
         ?>
    </table>

    
<?php


$query = "SELECT SUM(order_price) AS total_price FROM orders WHERE order_stat = 'D'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error: ' . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$totalPrice = $row['total_price'];

echo "TOTAL SALES: Php $totalPrice";

mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>