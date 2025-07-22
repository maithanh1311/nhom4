<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="./css/login.css">
    <title>MTC Computer</title>
  <link rel="shortcut icon" href="./images/image.png" type="image/png" />
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Đăng nhập tài khoản
        </div>
        <form action="./auth.php?controller=auth&action=register" method="POST">
            <div class="field">
                <input type="text" id="fullname" name="fullname" required>
                <label for="fullname">Họ tên</label>
            </div>
            <div class="field">
                <input type="text" name="username" required>
                <label>Tài khoản</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Mật khẩu</label>
            </div>
            <div class="field">
                <input type="text" id="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="field">
                <input type="text" id="phone" name="phone" >
                <label for="phone">Số điện thoại</label>

            </div>
            <div class="field">
                <input type="date" id="birthday" name="birthday">
                <label for="birthday">Ngày sinh</label>
            </div>
            <div class="field">
                <input type="text" id="address" name="address" required>
                <label for="address">Địa chỉ</label>
            </div>
            <div class="field">
                <input type="submit" value="Đăng nhập">
            </div>
        </form>
        <p><center>Bạn có tài khoản vui lòng <a href="./auth.php?controller=auth&action=loginForm">Đăng nhập</a></center></p>
    </div>
</body>

</html>