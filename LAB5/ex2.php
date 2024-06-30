<?php
    $servername = "localhost";
    $username = "root"; // Thay bằng username của bạn
    $password = ""; // Thay bằng password của bạn
    $dbname = "mobile_store";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM mobiles";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Mobile Store</title>
    <link rel = "stylesheet" href = "style.css">
    <script src = "https://kit.fontawesome.com/1933673737.js" crossorigin = "anonymous"></script>
    <style>
        html {
            line-height: 1.3em;
            font-family: sans-serif;
            font-size: 14px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 300px;
            height: 580px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            position: relative;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 300px !important;
            object-fit: cover;
            border-radius: 5px;
        }

        .card-body {
            padding: 10px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin: 10px 0;
        }

        .card-tag {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .card-tag-item {
            font-size: 12px;
            padding: 2px 10px;
            border: 1px solid #ccc;
            border-radius: 15px;
            color: #777;
        }

        .card-price-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-price {
            font-size: 18px;
            color: red;
        }

        .card-original-price {
            font-size: 16px;
            color: #ccc;
            text-decoration: line-through;
        }

        .card-discount {
            --r: 0.4em; /* control the ribbon shape (the radius) */
            --c: red;
            color: white;
            font-size: 18px;
            position: absolute;
            top: 10px;
            left: calc(-1 * var(--r));
            line-height: 1.4;
            padding: 0 .5em calc(2 * var(--r));
            border-radius: var(--r) 0 0 var(--r);
            background: radial-gradient(100% 50% at left, var(--c) 98%, #0000 101%) 100% 0/.5lh calc(100% - 2 * var(--r)),
            radial-gradient(100% 50% at right, #0005 98%, #0000 101%) 0 100%/var(--r) calc(2 * var(--r)),
            conic-gradient(from 90deg at var(--r) calc(100% - 2 * var(--r)), #0000 25%, var(--c) 0) 0 0/calc(101% - .5lh) 100%;
            background-repeat: no-repeat;
        }

        .card-additional-info {
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: left;
            line-height: 1.5em;
            padding: 10px;
            font-size: 14px;
            color: #777;
        }

        .card-rating {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 5px;
            color: #f1c40f;
            margin-top: 10px;
        }

        .card-favorite {
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            gap: 5px;
            font-size: 16px;
            position: absolute;
            bottom: 10px;
            right: 10px;
            padding: 5px 4px;
            color: #777;
            border-radius: 5px;
        }

        .card-favorite p:hover {
            color: red;
        }

        .card-favorite span {
            font-size: 18px;
            color: red;
        }
    </style>
</head>
<body>
<div class = "container">
    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<div class="card-discount left">Giảm ' . number_format((1 - $row["discount_price"] / $row["original_price"]) * 100) . '%</div>';
                echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . ' width = "300">';
                echo '<div class="card-body">';
                echo '<div class="card-title">' . $row["name"] . '</div>';
                echo '<div class="card-tag">';
                echo '<div class="card-tag-item">' . $row["screen_size"] . '</div>';
                echo '<div class="card-tag-item">' . $row["ram"] . '</div>';
                echo '<div class="card-tag-item">' . $row["storage"] . '</div>';
                echo '</div>';
                echo '<div class="card-price-wrapper">';
                echo '<div class="card-price">' . number_format($row["discount_price"]) . ' đ</div>';
                echo '<div class="card-original-price">' . number_format($row["original_price"]) . ' đ</div>';
                echo '</div>';
                if ($row["additional_info"]) {
                    echo '<div class="card-additional-info">' . $row["additional_info"] . '</div>';
                    echo '<div class="card-rating">';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '</div>';
                }

                echo '</div>';
                echo '<a href="#" class="card-favorite">
                            <p>Yêu thích</p>
                            <span><i class="fa-regular fa-heart"></i></span>
                      </a>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>
</div>
</body>
</html>
