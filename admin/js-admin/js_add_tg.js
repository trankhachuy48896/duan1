document.getElementById('add_tacGia').addEventListener('submit', () => {
    
    const add_tacGia_ten = document.getElementById('add_tacGia_ten');
    
    errorMessage.innerHTML = "";
    if(add_tacGia_ten.value.trim() === ""){
        event.preventDefault();
        errorMessage.innerHTML = "Chưa đặt tên tác giả";
    }
})