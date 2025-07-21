<?php ob_start(); ?>
<div class="form-wrapper">
    <div class="form-card">
        <h2 class="form-title"><i class="fas fa-user-plus me-2"></i>Thêm người dùng mới</h2>
        <form action="./admin.php?controller=user&action=store" method="POST">
            <div class="form-group">
                <label for="username">Tên tài khoản</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="fullname">Tên người dùng</label>
                <input type="text" name="fullname" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" name="phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <textarea name="address" rows="3" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="role">Phân quyền</label>
                <select name="role" class="form-control">
                    <option value="0">Người dùng</option>
                    <option value="1">Quản trị viên</option>
                </select>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
</div>
<?php
$content = ob_get_clean();
include './../views/admin/layout.php';
?>
