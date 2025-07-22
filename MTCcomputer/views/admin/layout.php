<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MTC Computer</title>
  <link rel="shortcut icon" href="./images/image.png" type="image/png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <div class="page-wrapper" id="main-wrapper">

    <!-- Sidebar -->
    <aside class="left-sidebar">
      <div class="logo-img">
        <a href="./admin.php ">
          <img src="./images/image.png" alt="Logo">
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-small-cap">TRANG QUẢN TRỊ</li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./admin.php?controller=product&action=index">
              <i class="fas fa-desktop"></i> <span>Sản phẩm</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./admin.php?controller=user&action=index">
              <i class="fas fa-users"></i> <span>Người dùng</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./admin.php?controller=category&action=index">
              <i class="fas fa-list"></i> <span>Danh mục sản phẩm</span>
            </a>
          </li>
        </ul>
        <ul class="logout">
          <li class="sidebar-item">
            <a class="sidebar-link" href="./admin.php?controller=admin&action=logout">
              <i class="fas fa-sign-out-alt"></i> <span>Đăng xuất</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Wrapper -->
    <div class="body-wrapper">

      <!-- Topstrip -->
      <div class="app-topstrip">
        <div><strong>HỆ THỐNG BÁN LINH KIỆN MÁY TÍNH</strong></div>
        <div>Xin chào, Quản trị viên</div>
      </div>

      <!-- Header -->
      <!-- <header class="app-header">
            <div class="search-box">
            <input type="text" placeholder="Bạn cần tìm gì?" class="menu-search" name="search">
            <button type="submit" class="button">Tìm kiếm</button>
            </div>
      </header> -->

      <form class="form-inline" action="./admin.php" method="GET">
        <header class="app-header">
          <input type="hidden" name="controller" value="<?= $_GET['controller'] ?? 'product' ?>">
          <input type="hidden" name="action" value="search">
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
        </header>
      </form>

      <!-- Nội dung chính -->
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <?= $content ?? '' ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>