document.querySelector("#register_form").addEventListener("submit", function (e) {

    const name = document.getElementById("name_register").value.trim();
    const email_register = document.getElementById("email_register").value.trim();
    const password_register = document.getElementById("password_register").value.trim();
    const phoneNumer_register = document.getElementById("phoneNumer_register").value.trim();
    const address_register = document.getElementById("address_register").value.trim();
    const errorMessageElement = document.getElementById("error-message");

    // Xóa nội dung thông báo lỗi cũ
    errorMessageElement.textContent = "";

    if (!name || !email_register || !password_register || !phoneNumer_register || !address_register) {
        e.preventDefault();
        errorMessageElement.textContent = "Vui lòng điền đầy đủ thông tin";
        return;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email_register && !emailRegex.test(email_register)) {
        e.preventDefault();
        errorMessageElement.textContent = "Vui lòng điền email hợp lệ";
        return;
    }

    const phoneRegex = /^0\d{9}$/;
    if (phoneNumer_register && !phoneRegex.test(phoneNumer_register)) {
        e.preventDefault();
        errorMessageElement.textContent = "Vui lòng điền số điện thoại hợp lệ";
        return;
    }
});
