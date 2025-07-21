<div class="header">
    <div class="header introduce">
        <span><i class="od od-arrow-left-right"></i> Thu cũ <b>Giá ngon</b> - <b>Lên đời</b> tiết kiệm</span>
        <span><i class="od od-award-fill"></i> Sản phẩm <b>Chính hãng</b> - <b>Xuất VAT</b> đầy đủ</span>
        <span><i class="od od-download"></i> <b>Tải App Smember</b> - Tích điểm & nhận ưu đãi</span>
    </div>
    <div class="header menu">
        <a href="" class="logo"><img src="./assetsuser/image/banner.png" alt="" class="logo-od"></a>
        <div class="search-box">
            <input type="text" placeholder="Bạn cần tìm gì?" class="menu-search" name="search"
              value="<?= isset($_GET['search']) ? htmlspecialchars(string: $_GET['search']) : '' ?>"
              aria-label="Search">
            <div class="input-group-append">
              <button type="submit" class="button">
                <i class="fa fa-search fa-sm"></i>Tìm kiếm
              </button>
            </div>
          </div>
        <div class="right-icons">
            <div><i class="bi bi-telephone-fill"></i><span>Gọi mua hàng<br><b>1800.2097</b></span></div>
            <div><a href=""><i class="od od-geo-alt"></i><span>Cửa hàng gần bạn</span></a></div>
            <div><a href=""><i class="od od-truck"></i><span>Tra cứu đơn hàng</span></a></div>
            <div><a href=""><i class="od od-cart"></i><span>Giỏ hàng</span></a></div>

            <?php session_start(); ?>
            <?php if (isset($_SESSION['client']) && $_SESSION['client']): ?>
                <li class="od od-logout"><a href="./client.php?controller=client&action=logout" class="border_r">Đăng xuất</a>
                </li>
                <li class="od od-us"><?= $_SESSION['client']['username'] ?></li>
            <?php else: ?>
                <li class="od od-login"><a href="./auth.php">Đăng nhập</a></li>
            <?php endif ?>
        </div>
    </div>
    <div class="header banner">
        <div class="banner-od od-01">
            <ul class="sidebar">
                <li><a href=""><i class="od od"></i> Laptop</a></li>
                <li><a href=""><i class="od od-headphones"></i> PC</a></li>
                <li><a href=""><i class="od od-watch"></i> Camera</a></li>
                <li><a href=""><i class="od od-pc-display"></i>Màn hình</a></li>
                <li><a href=""><i class="od od-arrow-repeat"></i> VGA</a></li>
                <li><a href=""><i class="od od-box"></i> CPU</a></li>
                <li><a href=""><i class="od od-ram"></i> RAM</a></li>
                <li><a href=""><i class="od od-bomt"></i> MAINBOARD</a></li>
                <li><a href=""><i class="od od-lis"></i> TAI NGHE,LOA</a></li>
            </ul>
        </div>
        <div class="banner-od od-02">
            <div class="banner-od">
                <img src="https://cdn.cellphones.com.vn/media/wysiwyg/banner/Xiaomi_Smart_Band_10_Desktop.jpg"
                    alt="Xiaomi Banner">
            </div>
            <div class="ads">
                <img src="https://cdn.cellphones.com.vn/media/wysiwyg/banner/galaxy-m55-banner.jpg" alt="Galaxy Ad">
                <img src="https://cdn.cellphones.com.vn/media/wysiwyg/banner/ipad-giam-gia.jpg" alt="iPad Ad">
                <img src="https://cdn.cellphones.com.vn/media/wysiwyg/banner/laptop-chinh-hang.jpg" alt="Laptop Ad">
            </div>
        </div>

    </div>
    <div class="banner-od od-03">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>