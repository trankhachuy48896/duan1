document.getElementById('edit_sach').addEventListener('submit', () => {
    
    const edit_sach_ten = document.getElementById('edit_sach_ten');
    const edit_sach_gia = document.getElementById('edit_sach_gia');
    const edit_sach_soLuong = document.getElementById('edit_sach_soLuong');
    const edit_sach_danhMuc = document.getElementById('edit_sach_danhMuc');
    const edit_sach_nxb = document.getElementById('edit_sach_nxb');
    const edit_sach_anh = document.getElementById('edit_sach_anh');

    const image = edit_sach_anh.files;
    const errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "";
    if(image.length === 0 || edit_sach_danhMuc.value.trim() === "0" || edit_sach_nxb.value.trim() === "0" || edit_sach_ten.value.trim() === "" || edit_sach_gia.value.trim() === "" || edit_sach_soLuong.value.trim() === ""){
        event.preventDefault();
        errorMessage.innerHTML = "Vui lòng nhập và lựa chọn đầy đủ thông tin cần thiết !";
        errorMessage.scrollIntoView();
    }
})