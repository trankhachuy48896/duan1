document.querySelector("#formDonHang").addEventListener("submit", function (e) {
    const name_kh = document.getElementsByName('name_kh')[0].value.trim();
    const phone = document.getElementsByName('phone')[0].value.trim();
    const email = document.getElementsByName('email')[0].value.trim();
    const address = document.getElementsByName('address')[0].value.trim();
    const span_error = document.getElementById('span_error');

    span_error.textContent = "";

    if (!name_kh || !phone || !email || !address) {
        e.preventDefault();
        span_error.textContent = "Vui lòng điền đầy đủ thông tin";
        return;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email && !emailRegex.test(email)) {
        e.preventDefault();
        span_error.textContent = "Vui lòng điền email hợp lệ";
        return;
    }

    const phoneRegex = /^0\d{9}$/;
    if (phone && !phoneRegex.test(phone)) {
        e.preventDefault();
        span_error.textContent = "Vui lòng điền số điện thoại hợp lệ";
        return;
    }
});