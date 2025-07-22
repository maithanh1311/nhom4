<!DOCTYPE html>
<html lang="vi" dir="ltr">
<head>
   <meta charset="utf-8">

   <link rel="stylesheet" href="./css/login.css">
   <title>MTC Computer</title>
  <link rel="shortcut icon" href="./images/image.png" type="image/png" />
</head>
<body>
   <div class="login-wrapper">
      <div class="wrapper">
         <div class="title">Đăng nhập tài khoản</div>
         <form action="./auth.php?controller=auth&action=login" method="POST">
            <div class="field">
               <input type="text" name="username" required>
               <label>Tài khoản</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Mật khẩu</label>
            </div>
            <div class="field">
               <input type="submit" value="Đăng nhập">
            </div>
         </form>
         <div class="register-link">
            Chưa có tài khoản? <a href="./auth.php?controller=auth&action=registerForm">Đăng ký</a>
         </div>
      </div>
      
   </div>
</body>
</html>
