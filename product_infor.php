<?php
include '../php/db_config.php';

$product = null; // Đảm bảo biến được khởi tạo

if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']); // Chuyển đổi id thành số nguyên để tránh lỗi SQL Injection

    // Chuẩn bị truy vấn với PDO
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = :id");
    $stmt->bindParam(':id', $product_id, PDO::PARAM_INT); // Gắn giá trị cho tham số :id
    $stmt->execute(); // Thực thi truy vấn
    $product = $stmt->fetch(PDO::FETCH_ASSOC); // Lấy kết quả trả về
}

// Kiểm tra xem sản phẩm có tồn tại không
if (!$product) {
    echo "Sản phẩm không tồn tại hoặc ID sản phẩm không hợp lệ!";
    exit;
}
?>



<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <link rel="stylesheet" href="../css/product_infor.css">
</head>
<body>
    <header>
        <h1>Chi tiết sản phẩm</h1>
    </header>
    <main>
        <div class="product-container">
            <!-- Hiển thị ảnh nếu không có dùng ảnh mặc định -->
            <img src="../img/<?php echo htmlspecialchars($product['image'] ?? 'default.png'); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            
            <!-- tên sản phẩm -->
            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
            
            <!-- Hiển thị giá -->
            <p class="price"><?php echo number_format($product['price'], 0, ',', '.'); ?> VND</p>
            
            <!--  mô tả  -->
            <?php if (!empty($product['description'])): ?>
                <p class="description"><?php echo htmlspecialchars($product['description']); ?></p>
            <?php endif; ?>

            <!-- Form thêm vào giỏ hàng -->
            <form action="../php/add_to_cart.php" method="POST">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <label for="quantity">Số lượng:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <button type="submit">Thêm vào giỏ hàng</button>
            </form>
        </div>
    </main>
    <footer>
        <p>Bản quyền &copy; 2024 - Cửa hàng của chúng tôi</p>
    </footer>
</body>
</html>
