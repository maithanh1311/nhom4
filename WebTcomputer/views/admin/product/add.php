<?php
ob_start();
?>
<!-- <h1 class="add_h1">Thêm mới sản phẩm</h1> -->
<div>
    <div class="form-container">
        <form id="multiStepDonationForm"
            action="./admin.php?controller=product&action=store"
            method="POST" enctype="multipart/form-data">
            <!-- Step 1: Personal Information -->
            <div class="form-step active">
                <h2>Thêm mới sản phẩm</h2>
                <div class="form-group">
                    <label for="fullName">Ảnh</label>
                    <input type="file" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="category_id">Loại sản phẩm</label>
                    <select name="category_id" id="category_id">
                        <?php foreach($category as $cat) : ?>
                        <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Giá sản phẩm</label>
                    <input type="text" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="description">Mô tả sản phẩm</label>
                    <textarea name="description" id="description"></textarea>
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