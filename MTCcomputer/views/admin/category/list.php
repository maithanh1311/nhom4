<?php
$obstart = ob_start();
?>
<div>
    
</div>
<h2>Danh sách loại sản phẩm</h2>
<div>
    <a href="./admin.php?controller=category&action=add"
        class="ws-btn mb-2">Thêm mới</a>
</div>
<table class="my_table">
    <tr>
        <th>ID</th>
        <th>Tên loại</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($category as $cat): ?>
        <tr>
            <td><?= $cat['id'] ?></td>
            <td><?= $cat['name'] ?></td>
            
            <td>
                <a class="ws-btn"
                    href="./admin.php?controller=category&action=edit&id=<?= $cat['id'] ?>">
                    Sửa</a>
                <a class="ws-btn"
                    href="./admin.php?controller=category&action=delete&id=<?= $cat['id'] ?>"
                    onclick="return confirm('Bạn có chắc chắn Xóa?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
$content = ob_get_clean();
include './../views/admin/layout.php';
?>