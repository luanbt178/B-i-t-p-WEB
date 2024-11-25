<?php
include '../php/db_config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.";
    exit();
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id']; 
$quantity = $_POST['quantity']; 

// Check sản phẩn trong giỏ hàng
$stmt = $conn->prepare("SELECT * FROM cart WHERE user_id = :user_id AND product_id = :product_id");
$stmt->execute(['user_id' => $user_id, 'product_id' => $product_id]);
$existing_item = $stmt->fetch(PDO::FETCH_ASSOC);

if ($existing_item) {
    // Nếu đã có sp, thêm số lượng
    $new_quantity = $existing_item['quantity'] + $quantity;
    $stmt = $conn->prepare("UPDATE cart SET quantity = :quantity WHERE user_id = :user_id AND product_id = :product_id");
    $stmt->execute(['quantity' => $new_quantity, 'user_id' => $user_id, 'product_id' => $product_id]);
    echo "Cập nhật số lượng sản phẩm trong giỏ hàng.";
} else {
    // Nếu chưa thêm sp vào
    $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
    $stmt->execute(['user_id' => $user_id, 'product_id' => $product_id, 'quantity' => $quantity]);
    echo "Sản phẩm đã được thêm vào giỏ hàng.";
}
?>
