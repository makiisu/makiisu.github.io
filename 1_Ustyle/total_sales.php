<?php
include_once('config.php');

$query = "SELECT SUM(order_price) AS total_price FROM orders WHERE order_stat = 'D'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error: ' . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$totalPrice = $row['total_price'];

echo "Total Price for 'D' status products: $totalPrice";

mysqli_free_result($result);
mysqli_close($conn);
?>