<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Danh mục sản phẩm</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        width: 80%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .products {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .product {
        width: calc(33.33% - 20px);
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .pagination {
        margin-top: 20px;
    }

    .pagination a {
        text-decoration: none;
        padding: 8px 16px;
        border: 1px solid #ddd;
        color: #333;
        border-radius: 3px;
        margin: 0 5px;
    }

    .pagination a.active {
        background-color: #007bff;
        color: #fff;
        border: 1px solid #007bff;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Danh mục sản phẩm</h2>
    <div class="products">
        <?php
        // Include your PHP code to fetch products from the database
        // For demonstration purposes, let's assume you have an array of products
        $products = array(
            array("id" => 1, "name" => "Sản phẩm 1"),
            array("id" => 2, "name" => "Sản phẩm 2"),
            array("id" => 3, "name" => "Sản phẩm 3"),
            array("id" => 4, "name" => "Sản phẩm 4"),
            array("id" => 5, "name" => "Sản phẩm 5"),
            array("id" => 6, "name" => "Sản phẩm 6"),
            array("id" => 7, "name" => "Sản phẩm 7"),
            array("id" => 8, "name" => "Sản phẩm 8"),
            array("id" => 9, "name" => "Sản phẩm 9"),
        );

        // Loop through products and display them
        foreach ($products as $product) {
            echo '<div class="product">' . $product['name'] . '</div>';
        }
        ?>
    </div>

    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">Next</a>
    </div>
</div>

</body>
</html>
