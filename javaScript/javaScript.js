const errorMassage = document.getElementById('error-message');
const passwordInput = document.getElementById('password-login');
const usernameInput = document.getElementById('username-login');

    document.getElementById("login-form").addEventListener("submit", (event) =>{
    const password = passwordInput.value.trim();
    const username = usernameInput.value.trim();

    if(username === "" || password === ""){
        event.preventDefault();
        errorMassage.innerHTML = "<strong>Bạn không được để trống tài khoản hoặc mật khẩu !</strong>";
        passwordInput.focus();

    }else{
        errorMassage.innerHTML = "";
    }
})