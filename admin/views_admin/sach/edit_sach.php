<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Cập nhập sách</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Tên sách: <input type="text" name="" id="" required>
        Giá: <input type="number" name="" id="" min="0" required>
        Số lượng: <input type="number" name="" id="" min="0" required>
        Mô tả: <textarea name="" id="" rows="6"></textarea>
        Ảnh: <input type="file" name="" id="" required>
        Thuộc danh mục: <select name="" id="">
            <option value="">Trinh thám</option>
            <option value="">Kinh dị</option>
            <option value="">Tiểu thuyết</option>
        </select>
        Nhà xuất bản: <select name="" id="">
            <option value="">Kim Đồng</option>
            <option value="">Ngôi Sao</option>
            <option value="">Tự truyện</option>
        </select>
        <button type="submit">Cập nhập</button>
    </form>
</div>

<?php include_once "views_admin/footer_admin.php" ?>