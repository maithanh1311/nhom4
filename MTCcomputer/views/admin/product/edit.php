<?php
ob_start();
?>
<div>
    <div class="form-container">
        <form id="multiStepDonationForm" action="./admin.php?controller=product&action=update"
            method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <input type="hidden" name="image_old" value="<?= $product['image'] ?>">
            <div class="form-step active">
                <h2>Chỉnh sửa sản phẩm</h2>
                <div class="form-group">
                    <label for="image">Ảnh</label>
                    <input type="file" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" id="name" name="name" value="<?= $product['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="category_id">Loại sản phẩm</label>
                    <select name="category_id" id="category_id">
                        <?php foreach ($category as $cat) : ?>
                            <option value="<?= $cat['id'] ?>" <?= $product['category_id'] ==  $cat['id'] ? 'selected' : '' ?>>
                                <?= $cat['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Giá sản phẩm</label>
                    <input type="text" id="price" name="price" value="<?= $product['price'] ?>">
                </div>
                <div class="form-group">
                    <label for="description">Mô tả sản phẩm</label>
                    <textarea name="description" id="description" rows="5"><?= $product['description'] ?></textarea>
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