<?php
ob_start();
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="table-wrapper">
                <div>
                    <h2 class="card-title">Danh sách sản phẩm</h2>
                </div>
                <a href="./admin.php?controller=product&action=add" class="them-moi">thêm mới</a>
                <div class="table-user mt-4">
                    <table class="table-user">
                        <thead>
                            <tr>

                                <th scope="col" class="px-0 text-muted">
                                    ID
                                </th>
                                <th scope="col" class="px-0 text-muted">
                                    Tên sản phẩm
                                </th>
                                <th scope="col" class="px-0 text-muted">
                                    Loại sản phẩm
                                </th>
                                <th scope="col" class="px-0 text-muted">
                                    Hình ảnh
                                </th>
                                <th scope="col" class="px-0 text-muted text-end">
                                    giá tiền
                                </th>
                                <th>
                                    Thao tác
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($products) || !is_array($products)): ?>
                                <tr>
                                    <td colspan="5">Không tìm thấy sản phẩn này.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td class="px-0">
                                            <?= $product['id'] ?>

                                        </td>
                                        <td class="px-0"><?= $product['name'] ?></td>
                                        <td class="px-0"><?= $product['name_cate'] ?></td>
                                        <td class="px-0">
                                            <img src="<?= $product['image'] ?>" alt="" class="rounded-circle" width="40">
                                        </td>
                                        
                                        <td class="px-0 text-dark fw-medium text-end">
                                            <?= number_format($product['price']) ?><sup>đ</sup>
                                        </td>
                                        <td>
                                            <a href="./admin.php?controller=product&action=edit&id=<?= $product['id'] ?>"
                                                class="btn-edit"><i class="fas fa-pen"></i> sửa</a>
                                            <a href="./admin.php?controller=product&action=delete&id=<?= $product['id'] ?>"
                                                class="btn-delete"><i class="fas fa-trash"></i> xóa</a>
                                                <!-- <a href="">onclick="return confirm('Bạn có chắc chắn Xóa?')">Xóa</a> -->
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// include './../../admin/layout.php'
?>


<?php
$content = ob_get_clean();
include './../views/admin/layout.php'
    ?>