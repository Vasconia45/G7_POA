
documento.ready(inicio);

function inicio() {
    let button = $('#showHideLogin');
    button.click(login);
    let button2 = $('#showHideRegister');
    button2.click(register1);
    let button3 = $('#showHideRegister2');
    button3.click(register2);
}
function login() {
    let password = $('#PasswordLogin');
    if (password.get(0).type === "password") {
        password.get(0).type = "text";
    } else {
        password.get(0).type = "password";
    }
}

function register1() {
    let password = $('#Passwd1Register');
    if (password.get(0).type === "password") {
        password.get(0).type = "text";
    } else {
        password.get(0).type = "password";
    }
}

function register2() {
    let password = $('#Passwd2Register');
    if (password.get(0).type === "password") {
        password.get(0).type = "text";
    } else {
        password.get(0).type = "password";
    }
}