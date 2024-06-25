<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            align-items: center;
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
            font-weight: bold;
            font-size: 1.1em;
        }

        .camera-old-price {
            text-decoration: line-through;
            color: #888;
        }

        .camera-discount {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    echo '  <div class="container">
                <div class="camera-item">
                    <img src="../img/cam1.jpg" alt="">
                    <div class="camera-name">Máy Ảnh Sony RX100 IV (Chính hãng)</div>
                    <div class="camera-price-wrapper">
                        <div class="camera-price">19.090.000 ₫</div>
                        <div class="camera-old-price">22.990.000 ₫</div>
                        <div class="camera-discount">-17%</div>
                    </div>
                </div>
            </div>';
    ?>
</body>

</html>