<!DOCTYPE html>
<html lang="en" class="leading-[1.15] text-[14px] font-Inter bg-[#e6e6e6]">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: 'rgb(11, 116, 229)',
                        sweetRed: 'rgb(255, 66, 79)',
                    },
                    fontFamily: {
                        Inter: 'Inter, Helvetica, Arial, sans-serif',
                    }
                }
            }
        }
    </script>


    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("header.php"); ?>
    <main class="min-w-[1280px] max-w-[1440px] mx-auto">
        <div class="container flex justify-between items-start w-full gap-8">
            <aside class="container-left w-[240px] shrink-0 block">
                <div class="menu-wrapper w-full rounded-[8px] bg-white">
                    <div class="menu-title font-[600] leading-[150%] px-[16px] py-[12px] border-b border-solid">
                        Khám phá theo danh mục
                    </div>
                    <div class="menu-items-wrapper flex flex-col">
                        <div class="menu-item flex flex-col cursor-pointer border-b border-solid">
                            <a href="#" class="px-[16px] py-[10px]">Smartphone</a>
                        </div>
                        <div class="menu-item flex flex-col cursor-pointer border-b border-solid">
                            <a href="#" class="px-[16px] py-[10px]">Tablet</a>
                        </div>
                        <div class="menu-item flex flex-col cursor-pointer border-b border-solid">
                            <a href="#" class="px-[16px] py-[10px]">Máy đọc sách</a>
                        </div>
                        <div class="menu-item flex flex-col cursor-pointer border-b border-solid">
                            <a href="#" class="px-[16px] py-[10px]">Điện thoại phổ thông</a>
                        </div>
                        <div class="menu-item flex flex-col cursor-pointer border-b border-solid">
                            <a href="#" class="px-[16px] py-[10px]">Điện thoại bàn</a>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="container-right main-items">
                <div class="camera-title p-[16px] bg-white rounded-[8px] mb-[28px]">
                    <h2 class="text-[28px] font-semibold leading-[150%] m-0">Điện thoại - Máy tính bảng</h2>
                </div>
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
                    [
                        'image' => '../img/cam1.jpg',
                        'name' => 'Máy Ảnh Canon G9X Mark II (Hàng Nhập Khẩu)',
                        'price' => '9.490.000 ₫',
                        'old_price' => '11.990.000 ₫',
                        'discount' => '-21%',
                    ],
                    [
                        'image' => '../img/cam1.jpg',
                        'name' => 'Máy Ảnh Canon G9X Mark II (Hàng Nhập Khẩu)',
                        'price' => '9.490.000 ₫',
                        'old_price' => '11.990.000 ₫',
                        'discount' => '-21%',
                    ]
                ];

                echo '<div class="camera-wrapper flex flex-wrap	justify-between gap-[15px]">';
                foreach ($cameras as $camera) {
                    echo '<div class="camera-item bg-white w-[24%] border border-solid p-[10px] text-center rounded-[8px]">';
                    echo '  <img class="w-full h-auto" src="' . $camera['image'] . '" alt="' . $camera['name'] . '">';
                    echo '  <div class="camera-name text-[1.2rem] mx-[10px]">' . $camera['name'] . '</div>';
                    echo '  <div class="camera-price-wrapper flex justify-center items-center gap-[10px]">';
                    echo '      <div class="camera-price text-red">' . $camera['price'] . '</div>';
                    echo '      <div class="camera-old-price line-through text-[#888]">' . $camera['old_price'] . '</div>';
                    echo '      <div class="camera-discount text-green">' . $camera['discount'] . '</div>';
                    echo '  </div>';
                    echo '</div>';
                }
                echo '</div>';
                ?>
            </div>
        </div>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>