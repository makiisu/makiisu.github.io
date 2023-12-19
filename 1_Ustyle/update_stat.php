<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_code = $_POST['order_code'];
    $action = $_POST['action'];

    // Update the order status based on the selected action
    $update_query = "UPDATE orders SET order_stat = '$action' WHERE order_code = '$order_code'";
    $update_result = mysqli_query($conn, $update_query);

    if (!$update_result) {
        die('Error updating order status: ' . mysqli_error($conn));
    }

    // Redirect back to the admin dashboard after updating the status
    header('Location: admin.php');
    exit;
} else {
    // If the form is not submitted via POST, redirect to the admin dashboard
    header('Location: admin.php');
    exit;
}
?>