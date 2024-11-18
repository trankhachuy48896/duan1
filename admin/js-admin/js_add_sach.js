document.getElementById('add_sach').addEventListener('submit', () => {
    
    const add_sach_danhMuc = document.getElementById('add_sach_danhMuc');
    const add_sach_nxb = document.getElementById('add_sach_nxb');
    const add_sach_anh = document.getElementById('add_sach_anh');
    const image = add_sach_anh.files;
    const errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "";
    if(image.length === 0 || add_sach_danhMuc.value === "0" || add_sach_nxb.value === "0"){
        event.preventDefault();
        errorMessage.innerHTML = "Chưa đặt chọn danh mục hoặc chọn ảnh hoặc chọn tên nhà xuất bản";
    }
})