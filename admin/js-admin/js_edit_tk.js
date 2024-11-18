document.getElementById('edit_taiKhoan').addEventListener('submit', () => {
    
    const edit_taiKhoan_ten = document.getElementById('edit_taiKhoan_ten');
    const edit_taiKhoan_tenDangNhap = document.getElementById('edit_taiKhoan_tenDangNhap');
    const edit_taiKhoan_matKhau = document.getElementById('edit_taiKhoan_matKhau');
    const edit_taiKhoan_email = document.getElementById('edit_taiKhoan_email');
    const edit_taiKhoan_soDienThoai = document.getElementById('edit_taiKhoan_soDienThoai');
    const edit_taiKhoan_diaChi = document.getElementById('edit_taiKhoan_diaChi');
    const edit_taiKhoan_vaiTro = document.getElementById('edit_taiKhoan_vaiTro');

    const errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "";
    if(edit_taiKhoan_ten.value.trim() === "" || edit_taiKhoan_tenDangNhap.value.trim() === "" || edit_taiKhoan_matKhau.value.trim() === "" || edit_taiKhoan_diaChi.value.trim() === "" || edit_taiKhoan_vaiTro.value.trim() === "0"){
        event.preventDefault();
        errorMessage.innerHTML = "Vui lòng nhập và lựa chọn đầy đủ thông tin cần thiết !";
        return;
    }
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(edit_taiKhoan_email.value.trim())) {
        event.preventDefault();
      errorMessage.innerHTML = "Email không hợp lệ. Vui lòng nhập lại.";
      return;
    }
  
    // Kiểm tra số điện thoại
    const phonePattern = /^(0[3|5|7|8|9])+([0-9]{8})$/; // Kiểm tra số điện thoại Việt Nam
    if (!phonePattern.test(edit_taiKhoan_soDienThoai.value.trim())) {
        event.preventDefault();
      errorMessage.innerHTML = "Số điện thoại không hợp lệ. Vui lòng nhập lại.";
      return;
    }
})