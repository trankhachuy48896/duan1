document.getElementById('add_nxb').addEventListener('submit', () => {
    
    const add_tenNxb = document.getElementById('add_tenNxb');
    const errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "";
    if(add_tenNxb.value.trim() === ""){
        event.preventDefault();
        errorMessage.innerHTML = "Chưa đặt tên nhà xuất bản";
    }
})