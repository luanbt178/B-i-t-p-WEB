<?php
include '../php/db_config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: log_reg.php"); // Nếu người dùng chưa đăng nhập, chuyển hướng về trang login
    exit();
}

$user_id = $_SESSION['user_id'];

// Lấy thông tin người dùng
$stmt = $conn->prepare("SELECT username, email FROM users WHERE id = :user_id");
$stmt->execute(['user_id' => $user_id]);
$user_info = $stmt->fetch(PDO::FETCH_ASSOC);

// Lấy sản phẩm trong giỏ hàng 
$stmt = $conn->prepare("SELECT p.name, p.price, c.quantity, p.image_url FROM cart c 
                        JOIN products p ON c.product_id = p.id
                        WHERE c.user_id = :user_id");
$stmt->execute(['user_id' => $user_id]);
$cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

// tổng tiền
$total_price = 0;
foreach ($cart_items as $item) {
    $total_price += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin người dùng</title>
</head>
<body>
    <h1>Thông tin tài khoản</h1>
    <p><strong>Tên người dùng:</strong> <?php echo htmlspecialchars($user_info['username']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user_info['email']); ?></p>

    <h2>Giỏ hàng của bạn</h2>
    <?php if (count($cart_items) > 0): ?>
        <table>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Ảnh</th>
            </tr>
            <?php foreach ($cart_items as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td><?php echo number_format($item['price'], 2); ?> VNĐ</td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" width="50"></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <h3>Tổng tiền: <?php echo number_format($total_price, 2); ?> VNĐ</h3>
    <?php else: ?>
        <p>Giỏ hàng của bạn hiện tại đang trống.</p>
    <?php endif; ?>
</body>
</html>
