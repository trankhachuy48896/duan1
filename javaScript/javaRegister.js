document.querySelector("register_form").addEventListener("submit", function (e) {

    const name = document.getElementById("name").value.trim();
    const email_register = document.getElementById("email_register").value.trim();
    const username_register = document.getElementById("username_register").value.trim();
    const password_register = document.getElementById("password_register").value.trim();
    const verify_password = document.getElementById("verify_password").value.trim();
    const phoneNumer_register = document.getElementById("phoneNumer_register").value.trim();

    let errorMessage = "";

    if (!name || !email_register || !username_register || !password_register || !verify_password || !phoneNumer_register) {
        e.preventDefault();
        errorMessage = "Vui lòng điền đầy đủ thông tin";
        return;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email_register && !emailRegex.test(email_register)) {
        e.preventDefault();
        errorMessage = "Vui lòng điền email hợp lệ";
        return;
    }

    if (password !== confirmPassword) {
        e.preventDefault();
        errorMessage = "Xác nhận mật khẩu sai";
        return;
    }

    const phoneRegex = /^\d{10,}$/;
    if (phoneNumer_register && !phoneRegex.test(phoneNumer_register)) {
        e.preventDefault();
        errorMessage = "Vui lòng điền số điện thoại hợp lệ";
        return;
    }
});
