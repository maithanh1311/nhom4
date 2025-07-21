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
                                    Tên danh mục
                                </th>
                                <th>
                                    Thao tác
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($category) || !is_array($category)): ?>
                                <tr>
                                    <td colspan="3">Không tìm thấy danh mục này.</td>
                                </tr>
                            <?php else: ?>
                            <?php foreach ($category as $gory): ?>
                                <tr>
                                    <td class="px-0">
                                        <?= $gory['id'] ?>
                                        
                                    </td>
                                    <td class="px-0"><?= $gory['name'] ?></td>
                                    <td>
                                        <a href="./admin.php?controller=category&action=edit&id=<?= $gory['id'] ?>"
                                            class="btn-edit"><i class="fas fa-pen"></i> sửa</a>
                                        <a href="./admin.php?controller=category&action=delete&id=<?= $gory['id'] ?>"
                                            class="btn-delete"><i class="fas fa-trash"></i> xóa</a>
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