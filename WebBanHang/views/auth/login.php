<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng nhập</title>
  <link rel="shortcut icon" type="image/png" href="./assetsuser/image/logo.jpg">
  <link rel="stylesheet" href="./assetsuser/css/login.css" />
</head>
<body>
  <div class="login-container">
    <form class="login-form" action="./auth.php?controller=auth&action=login" method="POST">
      <h2>ĐĂNG NHẬP</h2>
      <div class="input-group">
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" placeholder="Nhập tên đăng nhập" required />
      </div>
      <div class="input-group">
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" placeholder="Nhập mật khẩu" required />
      </div>
      <button type="submit">Đăng nhập</button>
      <p class="register-link">Chưa có tài khoản? <a href="./auth.php?controller=auth&action=registerForm">Đăng ký</a></p>
    </form>
  </div>
</body>
</html>
