<?php
ob_start();
?>

<div class="content" style="margin: 0 auto;
  padding: 0 15px; max-width: 1500px;">
            <h2 class="text_title note">Sản phẩm <?= $findByCat['name'] ?></h2>
            <div class="content1">
                <?php foreach ($products as $pr): ?>
                    <div class="content12">
                        <a href=""><img
                                src="<?= $pr['image'] ?>"
                                alt=""
                                width="250px"
                                height="200px" />
                        </a>
                        <span><?= $pr['name'] ?></span>
                        <span style="color: orange"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                        <button class="btn_giohang">Thêm vào giỏ</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

<?php
$content = ob_get_clean();
include "./../views/client/layout.php";
?>