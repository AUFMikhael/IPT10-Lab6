<?php
session_start();
require "products.php";

$cart = $_SESSION['cart'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    <ul>
        <?php if (empty($cart)): ?>
            <li>Your cart is empty.</li>
        <?php else: ?>
            <?php foreach ($cart as $item): ?>
                <li>
                    <?php echo $item['name']; ?> - <?php echo $item['price']; ?> PHP
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

    <a href="reset-cart.php">Clear my cart</a>
    <a href="place_order.php">Place the order</a>
</body>
</html>
