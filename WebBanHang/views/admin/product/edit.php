<?php ob_start();?>
<div class="form-wrapper">
    <div class="form-card">
        <h2 class="form-title">Chỉnh sửa sản phẩm</h2>
        <form action="./admin.php?controller=product&action=update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?=$product['id'] ?>">
            <div class="form-group">
                <label for="name">Tên Sản phẩm</label>
                <input type="text" name="name" class="form-control" value="<?= $product['name']?> "required>
            </div>

            <div class="form-group">
                <label for="image">Ảnh sản phẩm</label>
                <input type="file" name="image" class="form-control" value="<?= $product['image']?>" required>
            </div>
            <div class="form-group">
                    <label for="name_cate">Loại sản phẩm</label>
                    <select name="name_cate" id="name_cate">
                        <?php foreach ($category as $cat) : ?>
                            <option value="<?= $cat['id'] ?>" <?= $product['name_cate'] ==  $cat['id'] ? 'selected' : '' ?>>
                                <?= $cat['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <div class="form-group">
                <label for="prive">Giá sản phẩm</label>
                <input type="text" name="price" class="form-control" value="<?= $product['price']?>" required>
            </div>
        
            <div class="form-group">
                <label for="descriptin">Mô tả</label>
                <input type="text" name="descriptin" class="form-control" value="<?= $product['descriptin']?>" required>
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