<!DOCTYPE html>
<html>
<head>
    <title>PRODUK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .product {
            float: left;
            margin: 20px;
            text-align: center;
        }

        .product img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #ddd;
        }

        .product h2 {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Produk</h1>

    <?php
    // Data produk dalam array
    $products = array(
        array(
            "name" => "Triple Peach Americano",
            "image" => "gambar/img1.jpg"
        ),
        array(
            "name" => "Iced Classic Latte",
            "image" => "gambar/img2.jpg"
        ),
        array(
            "name" => "Nutty Oat Latte",
            "image" => "gambar/img3.jpg"
        ),
        array(
            "name" => "Iced Salted Caramel Mocha",
            "image" => "gambar/img4.jpg"
        ),
    );

    // Output data setiap produk
    foreach ($products as $product) {
        echo '<div class="product">';
        echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
        echo '<h2>' . $product['name'] . '</h2>';
        echo '</div>';
    }
    ?>
</body>
</html>
