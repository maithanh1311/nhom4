<?php
ob_start();
?>
<!-- <h1 class="add_h1">Thêm mới sản phẩm</h1> -->
<div>
    <div class="form-container">
        <form id="multiStepDonationForm"
            action="./admin.php?controller=user&action=store"
            method="POST">
            <!-- Step 1: Personal Information -->
            <div class="form-step active">
                <h2>Thêm mới người dùng</h2>
                <div class="form-group">
                    <label for="fullname">Họ tên</label>
                    <input type="text" id="fullname" name="fullname">
                </div>
                <div class="form-group">
                    <label for="username">Tài khoản</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="text" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="birthday">Ngày sinh</label>
                    <input type="date" id="birthday" name="birthday">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" id="address" name="address">
                </div>

                <div class="form-group">
                    <label for="role">Quyền</label>
                    <select name="role" id="role">
                        <option value="0">Customer</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
                <button type="submit" id="nextBtn" class="btn btn-primary">Thêm mới</button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include './../views/admin/layout.php';
?>