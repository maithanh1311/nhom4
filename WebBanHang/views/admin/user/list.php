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
                <a href="./admin.php?controller=user&action=add" class="them-moi"><i class="fas fa-user-plus me-2"></i> thêm mới</a>
                <div class="table-user mt-4">
                    <table class="table-user">
                        <thead>
                            <tr>

                                <th scope="col" class="px-0 text-muted">
                                    ID
                                </th>
                                <th scope="col" class="px-0 text-muted">
                                    Tên Tài Khoản
                                </th>
                                <th scope="col" class="px-0 text-muted">
                                    Mật Khẩu
                                </th>
                                <th scope="col" class="px-0 text-muted text-end">
                                    Email
                                </th>
                                <th scope="col" class="px-0 text-muted text-end">
                                    Họ Và Tên
                                </th>
                                <th scope="col" class="px-0 text-muted text-end">
                                    Số Điện Thoại
                                </th>
                                <th scope="col" class="px-0 text-muted text-end">
                                    Địa chỉ
                                </th>
                                <th scope="col" class="px-0 text-muted text-end">
                                    Phân Quyền
                                </th>
                                <th>
                                    Thao tác
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($users) || !is_array($users)): ?>
                                <tr>
                                    <td colspan="9">Không tìm thấy người dùng này.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td class="px-0">
                                            <?= $user['id'] ?>
                                            
                                        </td>
                                        <td class="px-0"><?= $user['username'] ?></td>
                                        <td class="px-0">
                                            <?= $user['password'] ?>
                                        </td>
                                        <td class="px-0 text-dark fw-medium text-end">
                                            <?= $user['email'] ?>
                                        </td>
                                        <td class="px-0">
                                            <?= $user['fullname'] ?>
                                        </td>
                                        <td class="px-0">
                                            <?= $user['phone'] ?>
                                        </td>
                                        <td class="px-0">
                                            <?= $user['address'] ?>
                                        </td>
                                        <td class="px-0">
                                            <?= $user['role'] ?>
                                        </td>
                                        <td>
                                            <a href="./admin.php?controller=user&action=edit&id=<?= $user['id'] ?>"
                                                class="btn-edit"><i class="fas fa-pen"></i> sửa</a>
                                            <a href="./admin.php?controller=user&action=delete&id=<?= $user['id'] ?>"
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