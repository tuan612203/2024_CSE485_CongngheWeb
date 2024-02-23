<?php
$navItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        nav {
            background-color: #001e80; /* Màu xanh đậm hơn */
            overflow: hidden;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav li {
            float: left;
            position: relative;
        }

        nav li a {
            display: flex; /* Sử dụng flexbox */
            align-items: center; /* Căn giữa theo chiều dọc */
            color: white;
            text-align: center;
            padding: 14px 16px; 
            text-decoration: none;
            position: relative;
            transition: background-color 0.3s;
        }

        nav li a .icon {
            margin-right: 10px; /* Khoảng cách giữa icon và văn bản */
            color: white; /* Màu trắng cho icon */
            font-size: 20px; /* Kích thước của icon */
        }

        nav li a:hover {
            background-color: #16c1ff; /* Màu khi hover - có thể thay đổi tùy chọn */
            color: black;
        }

        nav li::after {
            content: '';
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            height: 20px; /* Chiều cao của gạch dọc */
            border-left: 1px solid white; /* Màu và độ rộng của gạch dọc */
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <?php
        // Mục đầu tiên với icon ngôi nhà và liên kết về trang chủ
        echo "<li><a href='index.php'><i class='icon fas fa-home'></i></a></li>";

        // Các mục menu khác
        foreach ($navItems as $item) {
            echo "<li><a href='#'>$item</a></li>";
        }
        ?>
    </ul>
</nav>
</body>
</html>
