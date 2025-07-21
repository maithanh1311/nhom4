<?php
ob_start();
?>
<!-- <h1 class="add_h1">Thêm mới sản phẩm</h1> -->
<div>
    <div class="form-container">
        <form id="multiStepDonationForm"
            action="./admin.php?controller=category&action=store"
            method="POST">
            <!-- Step 1: Personal Information -->
            <div class="form-step active">
                <h2>Thêm mới loại sản phẩm</h2>

                <div class="form-group">
                    <label for="name">Tên loại sản phẩm</label>
                    <input type="text" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="description">Mô tả loại sản phẩm</label>
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