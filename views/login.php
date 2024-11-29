<?php
include "header.php";
?>

<div class="form">
    <div class="form_login">
        <h2>Đăng Nhập</h2>
        <!-- Hiển thị lỗi nếu đăng nhập thất bại -->
        <?php if (isset($error) && $error): ?>
            <p style="color: red; font-weight: bold; text-align: center;"><?php echo $error; ?></p>
        <?php endif; ?>
        <!-- Hiển thị đăng kí thành công -->
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p style='color: green; font-weight: bold; text-align: center;'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị
        }
        ?>
        <form id="login-form" action="index.php?ctl=login" method="POST">
            Email:
            <input type="email" name="email" id="username-login" placeholder="Nhập email" require>

            Mật khẩu:
            <input type="password" name="password" id="password-login" placeholder="Nhập mật khẩu" require>

            <button type="submit">Đăng nhập</button>
            <br>
            <span id="error-message" style="color: red;"></span>
        </form>

        <a href="#">Quên mật khẩu?</a>
        <a href="index.php?ctl=form_dangky">Đăng ký</a>
    </div>

</div>
<script src="javaScript/javaScript.js"></script>
<?php
include "footer.php";
?>