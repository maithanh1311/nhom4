<?php
$obstart = ob_start();
?>
<div>
    
    <!-- <form action="" method="GET">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name" value="<?= isset($_GET['name']) && $_GET['name'] ? $_GET['name'] : '' ?>">
    </form> -->
</div>
<h2>Danh sách sản phẩm</h2>
<div>
    <a href="./admin.php?controller=product&action=add"
        class="ws-btn mb-2">Thêm mới</a>
</div>
<table class="my_table">
    <tr>
        <th>ID</th>
        <th>Hình ảnh</th>
        <th>Tên</th>
        <th>Loại</th>
        <th>Giá</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($products as $sp): ?>
        <tr>
            <td><?= $sp['id'] ?></td>
            <td><img class="avatar" src="<?= $sp['image'] ?>" alt=""></td>
            <td><?= $sp['name'] ?></td>
            <td><?= $sp['category_name'] ?></td>
            <td><?= number_format($sp['price']) ?><sup>đ</sup></td>
            <td>
                <a class="ws-btn"
                    href="./admin.php?controller=product&action=edit&id=<?= $sp['id'] ?>">
                    Sửa</a>
                <a class="ws-btn"
                    href="./admin.php?controller=product&action=delete&id=<?= $sp['id'] ?>"
                    onclick="return confirm('Bạn có chắc chắn Xóa?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
$content = ob_get_clean();
include './../views/admin/layout.php';
?>