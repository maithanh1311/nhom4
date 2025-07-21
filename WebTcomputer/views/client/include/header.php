<header id="header">
  <!-- Topbar -->
  <div class="header-top">
    <div class="container">
      <ul class="top-links">
        <li><a href="#"><i class="far fa-bell"></i> Thông báo</a></li>
        <li><a href="#"><i class="far fa-question-circle"></i> Trợ giúp</a></li>
        <?php session_start(); ?>
        <?php if (isset($_SESSION['client'])): ?>
          <li><a href="./client.php?controller=client&action=logout"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
          <li><a href="#"><i class="fas fa-user"></i> <?= $_SESSION['client']['username'] ?></a></li>
        <?php else: ?>
          <li><a href="#"><i class="fas fa-user-plus"></i> Đăng ký</a></li>
          <li><a href="./auth.php"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
        <?php endif ?>
      </ul>
    </div>
  </div>

  <!-- Middle: logo + search + icons -->
  <div class="header-middle">
    <div class="container">
      <div class="logo"><a href="./"><img src="./images/logo.png" alt="Logo"></a></div>
      <form action="./client.php" method="GET" class="search-form">
        <input type="hidden" name="controller" value="client">
        <input type="hidden" name="action" value="search">
        <input type="text" id="search-input" name="search" placeholder="Tìm sản phẩm, thương hiệu..." value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
        <button type="submit"><i class="fas fa-search"></i></button>
        <div id="suggestions" class="suggestions-box"></div>
      </form>
      <div class="header-icons">
        <a href="#"><i class="fas fa-heart"></i><span class="badge">0</span></a>
        <a href="#"><i class="fas fa-shopping-cart"></i><span class="badge">0</span></a>
      </div>
      <button class="hamburger" id="hamburger-btn"><i class="fas fa-bars"></i></button>
    </div>
  </div>

  <!-- Menu + dropdown -->
  <div class="header-bottom" id="main-menu">
    <div class="container">
      <ul class="main-menu">
        <li><a href="#">Trang chủ</a></li>
        <?php foreach ($category as $cat): ?>
        <li class="has-sub">
          <a href="./client.php?controller=client&action=findCategory&category_id=<?= $cat['id'] ?>"><?= $cat['name'] ?></a>
          <ul class="dropdown">
            <!-- Ví dụ submenu (có thể bổ sung) -->
            <li><a href="#">Thêm 1</a></li>
            <li><a href="#">Thêm 2</a></li>
          </ul>
        </li>
        <?php endforeach; ?>
        <li><a href="#">Tuyển dụng</a></li>
        <li><a href="#">Liên hệ</a></li>
      </ul>
    </div>
  </div>

  <!-- Banner -->
  <div class="header-banner">
    <img src="./images/banner.jpg" alt="Banner">
  </div>
</header>
