<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = $_POST['item_id'];
    $quantity = (int) $_POST['quantity'];

    if (isset($_SESSION['cart'][$item_id]) && $quantity > 0) {
        $_SESSION['cart'][$item_id]['quantity'] = $quantity;
    }

    header('Location: cart.php');
    exit;
}
?>
