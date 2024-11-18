document.getElementById('edit_nxb').addEventListener('submit', () => {

    const edit_tenNxb = document.getElementById('edit_tenNxb');
    const errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "";
    if(edit_tenNxb.value === ""){
        event.preventDefault();
        errorMessage.innerHTML = "Chưa đặt tên nhà xuất bản";
    }
})