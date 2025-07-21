<?php
$obstart = ob_start();
?>
<div>
    <h2>Tìm kiếm</h2>
    <!-- <form action="" method="GET">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name" value="<?= isset($_GET['name']) && $_GET['name'] ? $_GET['name'] : '' ?>">
    </form> -->
</div>
<h2>Danh sách người dùng</h2>
<div>
    <a href="./admin.php?controller=user&action=add"
        class="ws-btn mb-2">Thêm mới</a>
</div>
<table class="my_table">
    <tr>
        <th>ID</th>
        <th>Tài khoản</th>
        <th>Mật khẩu</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Quyền</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($user as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['username'] ?></td>
            <td><?= $u['password'] ?></td>
            <td><?= $u['email'] ?></td>
            <td><?= $u['phone'] ?></td>
            <td><?= $u['address'] ?></td>
            <td><?= $u['role'] ?></td>
            <td>
                <a class="ws-btn"
                    href="./admin.php?controller=user&action=edit&id=<?= $u['id'] ?>">
                    Sửa</a>
                <a class="ws-btn"
                    href="./admin.php?controller=user&action=delete&id=<?= $u['id'] ?>"
                    onclick="return confirm('Bạn có chắc chắn Xóa?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
$content = ob_get_clean();
include './../views/admin/layout.php';
?>