<?php
session_start();
$pageTitle = "Your Shopping Cart";
include 'header.php';
?>

<div class="container mt-5">
    <h2 class="mb-4">Your Shopping Cart</h2>
    <?php if (!empty($_SESSION['cart'])): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price (UGX)</th>
                    <th>Quantity</th>
                    <th>Total (UGX)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $grandTotal = 0;
                foreach ($_SESSION['cart'] as $id => $item):
                    $total = $item['price'] * $item['quantity'];
                    $grandTotal += $total;
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td><?php echo number_format($item['price']); ?></td>
                    <td>
                        <form action="update_cart.php" method="POST" class="d-inline">
                            <input type="hidden" name="item_id" value="<?php echo $id; ?>">
                            <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1" class="form-control" style="width: 80px; display: inline;">
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </form>
                    </td>
                    <td><?php echo number_format($total); ?></td>
                    <td>
                        <form action="remove_from_cart.php" method="POST" class="d-inline">
                            <input type="hidden" name="item_id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" class="text-right"><strong>Grand Total:</strong></td>
                    <td colspan="2"><strong><?php echo number_format($grandTotal); ?> UGX</strong></td>
                </tr>
            </tbody>
        </table>
        <div class="text-right">
            <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
        </div>
    <?php else: ?>
        <p>Your cart is empty. <a href="index.php">Continue Shopping</a></p>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
