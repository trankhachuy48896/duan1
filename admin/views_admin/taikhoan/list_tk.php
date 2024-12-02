<?php include_once "views_admin/header_admin.php" ?>
<!-- Main Content -->
<main class="content">
    <section class="table-section">
        <h2>Tài khoản</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Vai trò</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>

                    <th>
                        <a href="index.php?ctl=form_add_tk">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['id_kh'] ?></td>
                        <td><?= $user['name_kh'] ?></td>
                        <td><?= $user['password'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td><?= $user['address'] ?></td>
                        <td>
                            <?php
                            if ($user['role'] == 0) {
                                echo 'Khách hàng';
                            } else {
                                echo 'Quản trị';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($user['active'] == 0) {
                                echo 'Đang hoạt động';
                            } else {
                                echo 'Ngừng hoạt động';
                            }
                            ?>
                        </td>
                        <td><?= $user['created_at_kh'] ?></td>
                        <td>
                            <?php if ($user['role'] != 1) : ?>
                                <a href="index.php?ctl=edit_tk&id_kh=<?= $user['id_kh'] ?>">Sửa</a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="index.php?ctl=delete_tk&id_kh=<?= $user['id_kh'] ?>">Xóa</a>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
</main>
</div>

<?php include_once "views_admin/footer_admin.php" ?>