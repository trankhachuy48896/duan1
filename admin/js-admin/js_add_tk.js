document.getElementById('add_taiKhoan').addEventListener('submit', () => {
    
    const add_taiKhoan_ten = document.getElementById('add_taiKhoan_ten');
    const add_taiKhoan_tenDangNhap = document.getElementById('add_taiKhoan_tenDangNhap');
    const add_taiKhoan_matKhau = document.getElementById('add_taiKhoan_matKhau');
    const add_taiKhoan_email = document.getElementById('add_taiKhoan_email');
    const add_taiKhoan_soDienThoai = document.getElementById('add_taiKhoan_soDienThoai');
    const add_taiKhoan_diaChi = document.getElementById('add_taiKhoan_diaChi');
    const add_taiKhoan_vaiTro = document.getElementById('add_taiKhoan_vaiTro');

    const errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "";
    if(add_taiKhoan_ten.value.trim() === "" || add_taiKhoan_tenDangNhap.value.trim() === "" || add_taiKhoan_matKhau.value.trim() === "" || add_taiKhoan_diaChi.value.trim() === "" || add_taiKhoan_vaiTro.value.trim() === "0"){
        event.preventDefault();
        errorMessage.innerHTML = "Vui lòng nhập và lựa chọn đầy đủ thông tin cần thiết !";
        return;
    }
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(add_taiKhoan_email.value.trim())) {
        event.preventDefault();
      errorMessage.innerHTML = "Email không hợp lệ. Vui lòng nhập lại.";
      return;
    }
  
    // Kiểm tra số điện thoại
    const phonePattern = /^(0[3|5|7|8|9])+([0-9]{8})$/; // Kiểm tra số điện thoại Việt Nam
    if (!phonePattern.test(add_taiKhoan_soDienThoai.value.trim())) {
        event.preventDefault();
      errorMessage.innerHTML = "Số điện thoại không hợp lệ. Vui lòng nhập lại.";
      return;
    }
})