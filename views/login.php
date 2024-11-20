<?php
include "header.php";
?>

<div class="form">
    <div class="form_login">
        <h2>Đăng Nhập</h2>
        <form id="login-form" action="" method="POST">
            Tên đăng nhập:
            <input type="text" name="" id="username-login" placeholder="Nhập tên đăng nhập" require>

            Mật khẩu:
            <input type="password" name="" id="password-login" placeholder="Nhập mật khẩu" require>

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