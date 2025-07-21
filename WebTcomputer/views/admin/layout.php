<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/table.css">
    
</head>

<body>
    <div class="sidebar">
        <h2>Tổng quan</h2>
        <nav>
            <ul>
                <li>
                    <a href="./admin.php?controller=category&action=index"> Quản lý loại sản phẩm</a>
                    <a href="./admin.php?controller=product&action=index"> Quản lý Sản phẩm</a>
                    <a href="./admin.php?controller=user&action=index"> Quản lý Người dùng</a>
                    <a href="./admin.php?controller=admin&action=logout">Đăng xuất</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="main">
        <?php echo  $content ?? '' ?>
    </div>
</body>

</html>