<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "id" => 3,
        "name" => "Sneakers",
        "price" => 39.99,
        "description" => "Sporty and trendy sneakers."
    ],
    [
        "id" => 4,
        "name" => "Hoodie",
        "price" => 29.99,
        "description" => "A cozy hoodie for chilly days."
    ],
    [
        "id" => 5,
        "name" => "Dress",
        "price" => 49.99,
        "description" => "Elegant dress for special occasions."
    ],
    [
        "id" => 6,
        "name" => "Shorts",
        "price" => 19.99,
        "description" => "Casual and comfortable shorts."
    ]
];

// Đặt số mục trên mỗi trang
$itemsPerPage = 2;

// Truy cập số trang hiện tại từ URL bằng cách sử dụng GET
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Tính tổng số trang
$totalPages = ceil(count($products) / $itemsPerPage);

// Sử dụng hàm array_slice để lấy các mục cho trang hiện tại
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Product List</h1>

    <div class="product-list">
        <?php foreach ($currentPageItems as $product): ?>
            <div class="product">
                <h2><?php echo $product['name']; ?></h2>
                <p>Price: $<?php echo $product['price']; ?></p>
                <p>Description: <?php echo $product['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
