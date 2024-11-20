document.getElementById('add_danhmuc').addEventListener('submit', () => {
    
    const add_tenDanhMuc = document.getElementById('add_tenDanhMuc');
    const add_anhDanhMuc = document.getElementById('add_anhDanhMuc');
    const image = add_anhDanhMuc.files;
    const errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "";
    if(image.length === 0 || add_tenDanhMuc.value.trim() === ""){
        event.preventDefault();
        errorMessage.innerHTML = "Chưa đặt tên hoặc chọn ảnh";
    }
})