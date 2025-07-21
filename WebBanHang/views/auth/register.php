<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="./assetsuser/css/logout.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">Đăng ký tài khoản</div>

        <?php if (!empty($errors)): ?>
            <div class="error">
                <?php foreach ($errors as $error): ?>
                    <p>• <?= $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="auth.php?controller=auth&action=register" method="POST">
            <div class="field">
                <input type="text" name="fullname" value="<?= $_POST['fullname'] ?? '' ?>" required>
                <label>Họ tên</label>
            </div>
            <div class="field">
                <input type="text" name="username" value="<?= $_POST['username'] ?? '' ?>" required>
                <label>Tài khoản *</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Mật khẩu *</label>
            </div>
            <div class="field">
                <input type="text" name="email" value="<?= $_POST['email'] ?? '' ?>" required>
                <label>Email *</label>
            </div>
            <div class="field">
                <input type="text" name="phone" value="<?= $_POST['phone'] ?? '' ?>" required>
                <label>Số điện thoại</label>
            </div>
            <div class="field">
                <input type="date" name="birthday" value="<?= $_POST['birthday'] ?? '' ?>">
                <label>Ngày sinh</label>
            </div>
            <div class="field">
                <input type="text" name="address" value="<?= $_POST['address'] ?? '' ?>" required>
                <label>Địa chỉ</label>
            </div>
            <div class="field">
                <input type="submit" value="Đăng ký">
            </div>
        </form>

        <p>Đã có tài khoản? <a href="auth.php?controller=auth&action=loginForm">Đăng nhập</a></p>
    </div>
</body>

</html>
