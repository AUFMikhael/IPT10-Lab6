<?php
session_start();
require "products.php";

// Generate a random order code
$order_code = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);

// Get the cart items from the session
$cart = $_SESSION['cart'] ?? [];

// Compute the total price
$total_price = 0;
foreach ($cart as $item) {
    $total_price += $item['price'];
}

// Prepare the order details
$order_details = "Order Code: $order_code\n";
$order_details .= "Date: " . date('Y-m-d H:i:s') . "\n\n";
$order_details .= "Order Items:\n";
foreach ($cart as $item) {
    $order_details .= "Product ID: {$item['id']} - Name: {$item['name']} - Price: {$item['price']} PHP\n";
}
$order_details .= "\nTotal Price: $total_price PHP\n";

// Save the order details to a file
file_put_contents("orders-$order_code.txt", $order_details);

// Clear the cart
$_SESSION['cart'] = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Place Order</title>
</head>
<body>
    <h1>Order Confirmation</h1>
    <p>Thank you for your order! Your order code is <?php echo $order_code; ?>.</p>
    <h2>Order Summary</h2>
    <pre><?php echo $order_details; ?></pre>
</body>
</html>
