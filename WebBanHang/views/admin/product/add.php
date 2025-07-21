<?php ob_start();?>
<div class="form-wrapper">
    <div class="form-card">
        <h2 class="form-title"> Thêm người sản phẩm</h2>
        <form action="./admin.php?controller=product&action=store" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Tên Sản phẩm</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image">Ảnh sản phẩm</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group">
                    <label for="ID">Loại sản phẩm</label>
                    <select name="ID" id="ID">
                        <?php foreach($category as $cat) : ?>
                        <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <div class="form-group">
                <label for="prive">Giá sản phẩm</label>
                <input type="text" name="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descriptin">Mô tả</label>
                <input type="text" name="descriptin" class="form-control" required>
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