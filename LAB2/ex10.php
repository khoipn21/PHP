<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .camera-item {
            width: 30%;
            margin: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .camera-item img {
            width: 100%;
            height: auto;
        }

        .camera-name {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .camera-price-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .camera-price {
            color: red;
            font-size: 1.1em;
        }

        .camera-old-price {
            text-decoration: line-through;
            color: #888;
        }

        .camera-discount {
            color: green;
        }
    </style>
</head>

<body>
    <?php
    $cameras = [
        [
            'image' => '../img/cam1.jpg',
            'name' => 'Máy Ảnh Canon SX730 HS (Hàng Nhập Khẩu)',
            'price' => '7.690.000 ₫',
            'old_price' => '9.370.000 ₫',
            'discount' => '-18%',
        ],
        [
            'image' => '../img/cam1.jpg',
            'name' => 'Máy Ảnh Canon SX720 HS (Hàng Nhập Khẩu)',
            'price' => '6.290.000 ₫',
            'old_price' => '7.870.000 ₫',
            'discount' => '-20%',
        ],
        [
            'image' => '../img/cam1.jpg',
            'name' => 'Máy Ảnh Canon SX 620 HS (Hàng Nhập Khẩu)',
            'price' => '4.890.000 ₫',
            'old_price' => '6.240.000 ₫',
            'discount' => '-22%',
        ],
        [
            'image' => '../img/cam1.jpg',
            'name' => 'Máy Ảnh Canon SX730 HS (Hàng Chính Hãng)',
            'price' => '9.170.000 ₫',
            'old_price' => '10.620.000 ₫',
            'discount' => '-14%',
        ],
        [
            'image' => '../img/cam1.jpg',
            'name' => 'Máy Ảnh Canon Powershot G3X (Lê Bảo Minh)',
            'price' => '16.990.000 ₫',
            'old_price' => '22.500.000 ₫',
            'discount' => '-24%',
        ],
        [
            'image' => '../img/cam1.jpg',
            'name' => 'Máy Ảnh Canon G9X Mark II (Hàng Nhập Khẩu)',
            'price' => '9.490.000 ₫',
            'old_price' => '11.990.000 ₫',
            'discount' => '-21%',
        ],
    ];

    echo '<div class="container">';
    foreach ($cameras as $camera) {
        echo '<div class="camera-item">';
        echo '  <img src="' . $camera['image'] . '" alt="' . $camera['name'] . '">';
        echo '  <div class="camera-name">' . $camera['name'] . '</div>';
        echo '  <div class="camera-price-wrapper">';
        echo '      <div class="camera-price">' . $camera['price'] . '</div>';
        echo '      <div class="camera-old-price">' . $camera['old_price'] . '</div>';
        echo '      <div class="camera-discount">' . $camera['discount'] . '</div>';
        echo '  </div>';
        echo '</div>';
    }
    echo '</div>';
    ?>
</body>

</html>