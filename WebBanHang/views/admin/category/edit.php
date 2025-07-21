<?php ob_start();?>
<div class="form-wrapper">
    <div class="form-card">
        <h2 class="form-title">Chỉnh sửa Danh mục</h2>
        <form action="./admin.php?controller=product&action=update" method="POST">
            <div class="form-group">
                <label for="name">Tên danh mục/label>
                <input type="text" name="name" class="form-control" value="<?= $gory['name']?> "required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
</div>
<?php
$content = ob_get_clean();
include './../views/admin/layout.php'
    ?>