<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Đăng nhập</title>
      <link rel="stylesheet" href="./css/login.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Đăng nhập tài khoản
         </div>
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
         <p><center>Chưa có tài khoản vui lòng <a href="./auth.php?controller=auth&action=registerForm">Đăng ký</a></center></p>
      </div>
   </body>
</html>