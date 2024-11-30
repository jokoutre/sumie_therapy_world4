<?php
session_start();

// Check if the cart session exists, if not, initialize it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Get item details from the POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_id = $_POST['item_id']; // Unique ID of the item
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];

    // Check if the item already exists in the cart
    if (isset($_SESSION['cart'][$item_id])) {
        $_SESSION['cart'][$item_id]['quantity'] += 1; // Increment quantity
    } else {
        // Add the item to the cart
        $_SESSION['cart'][$item_id] = [
            'name' => $item_name,
            'price' => $item_price,
            'quantity' => 1,
        ];
    }

    // Send a JSON response
    echo json_encode(['status' => 'success', 'message' => 'Item added to cart']);
    exit;
}

echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
