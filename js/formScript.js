function openLoginForm(){
    document.getElementById("form-background").style.display = "flex"
    document.getElementById("login-form").parentElement.hidden = false
}

function openRegisterForm(){
    document.getElementById("form-background").style.display = "flex"
    document.getElementById("register-form").parentElement.hidden = false
}

function closeForm(event){
    if (event.target === document.getElementById("form-background")) {
        document.getElementById("register-form").parentElement.hidden = true
        document.getElementById("login-form").parentElement.hidden = true
        document.getElementById("form-background").style.display = "none"
    }
}

const loginForm = document.getElementById("login-form")

loginForm.onsubmit = function (event) {
    event.preventDefault();
    let xhr = new XMLHttpRequest();
    let url = "scripts/login.php";
    let data = JSON.stringify({
        email: document.getElementById("email-login").value,
        password: document.getElementById("password-login").value
    });
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            if (xhr.responseText == "1") {
                document.location.href = document.location.href
            } else {
                alert("Неверная почта или пароль!");
            }
        } else if (xhr.readyState === 4) {
            console.error("Ошибка:", xhr.responseText);
        }
    };
    xhr.send(data);
}

let emailAvail = true
let nameAvail = true
let passwordsSame = true

function checkPassword(){
    if (document.getElementById("password-input").value!=document.getElementById("repeat-password-input").value){
        document.getElementById("register-button").disabled = true
        document.getElementById("passwords-not-same").hidden = false
        passwordsSame = false
    } else {
        document.getElementById("passwords-not-same").hidden = true
        passwordsSame = true
        document.getElementById("register-button").disabled = !nameAvail || !emailAvail || !passwordsSame
    }
}

function checkEmail(){
    let xhr = new XMLHttpRequest();
    let url = "scripts/checkEmail.php?email="+document.getElementById("register-email").value;
    xhr.open("GET", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            if (xhr.responseText == "1") {
                document.getElementById("email-available").hidden = true
                document.getElementById("email-not-available").hidden = false
                document.getElementById("register-button").disabled = true
                emailAvail = false;
            } else {
                document.getElementById("email-available").hidden = false
                document.getElementById("email-not-available").hidden = true
                emailAvail = true;
                document.getElementById("register-button").disabled = !nameAvail || !emailAvail || !passwordsSame
            }
        } else if (xhr.readyState === 4) {
            console.error("Ошибка:", xhr.responseText);
        }
    };
    xhr.send();
}

function checkUserName(){
    let xhr = new XMLHttpRequest();
    let url = "scripts/checkUserName.php?name="+document.getElementById("register-username").value;
    xhr.open("GET", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            if (xhr.responseText == "1") {
                document.getElementById("username-available").hidden = true
                document.getElementById("username-not-available").hidden = false
                document.getElementById("register-button").disabled = true
                nameAvail = false;
            } else {
                document.getElementById("username-available").hidden = false
                document.getElementById("username-not-available").hidden = true
                nameAvail = true;
                document.getElementById("register-button").disabled = !nameAvail || !emailAvail || !passwordsSame
            }
        } else if (xhr.readyState === 4) {
            console.error("Ошибка:", xhr.responseText);
        }
    };
    xhr.send();
}