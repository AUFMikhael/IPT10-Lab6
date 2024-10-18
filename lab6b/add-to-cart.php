<?php
session_start();
require "products.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Find the product by ID from the $products array
    foreach ($products as $product) {
        if ($product['id'] == $product_id) {
            // Add product to the cart session
            $_SESSION['cart'][] = $product;
            break;
        }
    }
}

// Redirect to the cart page
header("Location: cart.php");
exit();
?>
