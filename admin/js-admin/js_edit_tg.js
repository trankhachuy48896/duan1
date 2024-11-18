document.getElementById('edit_tacGia').addEventListener('submit', () => {
    
    const edit_tacGia_ten = document.getElementById('edit_tacGia_ten');
    
    errorMessage.innerHTML = "";
    if(edit_tacGia_ten.value.trim() === ""){
        event.preventDefault();
        errorMessage.innerHTML = "Chưa đặt tên tác giả";
    }
})