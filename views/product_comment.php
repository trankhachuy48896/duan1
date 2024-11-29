<?php

?>

<?php include_once "views_admin/header_admin.php" ?>
<!-- Main Content -->
<main class="content">
    <section class="table-section">
        <h2>Bình luận</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Sản phẩm</th>
                    <th>ID Khách hàng</th>
                    <th>Đánh giá</th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($binhluan as $comment): ?>
                <tr>
                    <td><?php echo $comment['review_id']; ?></td>
                    <td><?php echo $comment['id_sp']; ?></td>
                    <td><?php echo $comment['id_kh']; ?></td>
                    <td><?php echo $comment['rating']; ?></td>
                    <td><?php echo $comment['comment']; ?></td>
                    <td><?php echo $comment['created_at_review']; ?></td>
                    <td>
                        <a href="delete_comment.php?id=<?php echo $comment['review_id']; ?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>
<?php include_once "views_admin/footer_admin.php" ?>
