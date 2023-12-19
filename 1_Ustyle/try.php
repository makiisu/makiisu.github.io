<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if the product is added to the cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

    // Check if the product is already in the cart
    $productIndex = array_search($product_id, array_column($_SESSION['cart'], 'id'));

    if ($productIndex !== false) {
        // Update the quantity if the product is already in the cart
        $_SESSION['cart'][$productIndex]['quantity'] += $quantity;
    } else {
        // Add the product to the cart
        $_SESSION['cart'][] = [
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => $quantity,
        ];
    }
}

// Check if the cart is cleared
if (isset($_POST['clear_cart'])) {
    // Clear the cart
    $_SESSION['cart'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart with Quantity</title>
</head>
<body>

    <h1>Products</h1>
    <ul>
        <li>
            <form method="post" action="">
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Product 1">
                <input type="hidden" name="product_price" value="10.00">
                <span>Product 1 - $10.00</span>
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </li>
        <li>
            <form method="post" action="">
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Product 2">
                <input type="hidden" name="product_price" value="15.00">
                <span>Product 2 - $15.00</span>
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </li>
    </ul>

    <h1>Shopping Cart</h1>
    <ul>
        <?php foreach ($_SESSION['cart'] as $item) : ?>
            <li>
                <?php echo $item['name']; ?> - $<?php echo number_format($item['price'] * $item['quantity'], 2); ?> 
                (Quantity: <?php echo $item['quantity']; ?>)
            </li>
        <?php endforeach; ?>
    </ul>

    <form method="post" action="">
        <button type="submit" name="clear_cart">Clear Cart</button>
    </form>

</body>
</html>
