<!-- Chữ chạy -->
<div class="top-marquee">
    <marquee behavior="scroll" direction="left">Chào mừng bạn đến với CellphoneS! Mua sắm thả ga - Ưu đãi cực đã!
    </marquee>
</div>
<div class="header-od">
    <ul>
        <li>Hệ thống</li>
        <li>Dành cho doanh nghiệp</li>
        <li>Hotline: 18006799 </li>
        <li>Thu cũ giá ngon</li>
        <li>Lên đời tiết kiệm</li>
        <li>Xây dựng cấu hình</li>
        <li>Cấu hình</li>
    </ul>
</div>
<!-- Header: Logo - Tìm kiếm - Giỏ hàng - Đăng nhập -->
<div class="header-main container">
    <div class="logo">
        <a href="./client.php"><img src="./images/image.png" alt="Logo" /></a>
    </div>
    <div class="search">
        <form action="#">
            <input type="text" class="txt_search" placeholder="Tìm kiếm" name="search"
                value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" />
            <button class="btn_search" type="submit">Tìm kiếm</button>
        </form>

    </div>
    <div class="actions">
        <div class="cart">
            <i class="fas fa-shopping-cart"></i>
            <span>Giỏ hàng</span>
        </div>

        <div class="login">
            <?php session_start(); ?>
            <?php if (isset($_SESSION['client']) && $_SESSION['client']): ?>
                <li class="nav-li"><a href="./client.php?controller=client&action=logout" class="border_r">Đăng xuất</a>
                </li>
                <li class="nav-li use"><?= $_SESSION['client']['username'] ?></li>
            <?php else: ?>
                <li class="nav-li"><a href="./auth.php">Đăng nhập</a></li>
            <?php endif ?>
            <!-- <span>Đăng nhập</span>
        <div class="username-placeholder">
          <span id="username-display"></span>
        </div> -->
        </div>
    </div>
</div>

<!-- Nội dung dưới header -->
<div class="content-below ">
    <!-- Sidebar danh mục -->
    <div class="sidebar">
        <ul>
            <?php foreach ($category as $cat) : ?>
                <li class="menu_li">
                    <a href="./client.php?controller=client&action=findCategory&category_id=<?= $cat['id'] ?>">
                        <?= $cat['name'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
           
        </ul>
    </div>

    <!-- Banner chính -->
    <div class="main-banner">
        <img src="./images/banner.jpg" alt="Banner chính">
    </div>

    <!-- Banner phụ -->
    <div class="side-banners">
        <img src="./images/banner-small-1.jpg" alt="Banner phụ 1">
        <img src="./images/banner-small-2.jpg" alt="Banner phụ 2">
        <img src="./images/banner-small-3.jpg" alt="Banner phụ 3">
    </div>
</div>