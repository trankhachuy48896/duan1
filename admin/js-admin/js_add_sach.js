document.getElementById('add_sach').addEventListener('submit', () => {
    
    const add_sach_ten = document.getElementById('add_sach_ten');
    const add_sach_gia = document.getElementById('add_sach_gia');
    const add_sach_soLuong = document.getElementById('add_sach_soLuong');
    const add_sach_danhMuc = document.getElementById('add_sach_danhMuc');
    const add_sach_nxb = document.getElementById('add_sach_nxb');
    const add_sach_anh = document.getElementById('add_sach_anh');

    const image = add_sach_anh.files;
    const errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "";
    if(image.length === 0 || add_sach_danhMuc.value.trim() === "0" || add_sach_nxb.value.trim() === "0" || add_sach_ten.value.trim() === "" || add_sach_gia.value.trim() === "" || add_sach_soLuong.value.trim() === ""){
        event.preventDefault();
        errorMessage.innerHTML = "Vui lòng nhập và lựa chọn đầy đủ thông tin cần thiết !";
        errorMessage.scrollIntoView();
    }
})