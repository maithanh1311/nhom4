<?php
ob_start();
?>
<div>
    <div class="form-container">
        <form id="multiStepDonationForm" action="./admin.php?controller=user&action=update"
         method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $user['id']?>">
            <div class="form-step active">
                <h2>Chỉnh sửa sản phẩm</h2>
                <div class="form-group">
                    <label for="fullname">Họ tên</label>
                    <input type="text" id="fullname" name="fullname" value="<?= $user['fullname']?>">
                </div>
                <div class="form-group">
                    <label for="username">Tài khoản</label>
                    <input type="text" id="username" name="username" value="<?= $user['username']?>">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="text" id="password" name="password" value="<?= $user['password']?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?= $user['email']?>">
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" id="phone" name="phone" value="<?= $user['phone']?>">
                </div>
                <div class="form-group">
                    <label for="birthday">Ngày sinh</label>
                    <input type="date" id="birthday" name="birthday" value="<?= $user['birthday']?>">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" id="address" name="address" value="<?= $user['address']?>">
                </div>

                <div class="form-group">
                    <label for="role">Quyền</label>
                    <select name="role" id="role">
                        <option value="0" <?= $user['role'] == 0 ? 'selected' : '' ?>>Customer</option>
                        <option value="1" <?= $user['role'] == 1 ? 'selected' : '' ?>>Admin</option>
                    </select>
                </div>
                <button type="submit" id="nextBtn" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include './../views/admin/layout.php'; 
?>