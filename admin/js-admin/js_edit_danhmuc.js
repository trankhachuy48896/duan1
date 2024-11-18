document.getElementById('edit_danhMuc').addEventListener('submit', () => {
    
    const edit_tenDanhMuc = document.getElementById('edit_tenDanhMuc');
    const edit_anhDanhMuc = document.getElementById('edit_anhDanhMuc');
    const image = edit_anhDanhMuc.files;
    const errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "";
    if(image.length === 0 || edit_tenDanhMuc.value === ""){
        event.preventDefault();
        errorMessage.innerHTML = "Chưa đặt tên hoặc chọn ảnh";
    }
})