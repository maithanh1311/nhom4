<?php
ob_start();
?>
<div>
    <div class="form-container">
        <form id="multiStepDonationForm" action="./admin.php?controller=category&action=update" method="POST">
            <input type="hidden" name="id" value="<?= $category['id'] ?>">
            <div class="form-step active">
                <h2>Chỉnh sửa sản phẩm</h2>
                <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" id="name" name="name" value="<?= $category['name']?>">
                </div>
                <div class="form-group">
                    <label for="description">Mô tả sản phẩm</label>
                    <textarea name="description" id="description" rows="5"><?=$category['description']?></textarea>
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