<?php ob_start(); ?>
<div class="form-wrapper">
    <div class="form-card">
        <h2 class="form-title"><i class="fas fa-edit me-2"></i>Chỉnh sửa người dùng</h2>
        <form action="./admin.php?controller=user&action=update" method="POST">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">

            <div class="form-group">
                <label for="username">Tên tài khoản</label>
                <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="text" name="password" class="form-control" value="<?= $user['password'] ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" required>
            </div>

            <div class="form-group">
                <label for="fullname">Tên người dùng</label>
                <input type="text" name="fullname" class="form-control" value="<?= $user['fullname'] ?>" required>
            </div>

            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" value="<?= $user['phone'] ?>">
            </div>

            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <textarea name="address" rows="3" class="form-control"><?= $user['address'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="role">Phân quyền</label>
                <select name="role" class="form-control">
                    <option value="0" <?= $user['role'] == 0 ? 'selected' : '' ?>>Người dùng</option>
                    <option value="1" <?= $user['role'] == 1 ? 'selected' : '' ?>>Quản trị viên</option>
                </select>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Lưu chỉnh sửa</button>
            </div>
        </form>
    </div>
</div>
<?php
$content = ob_get_clean();
include './../views/admin/layout.php';
?>
