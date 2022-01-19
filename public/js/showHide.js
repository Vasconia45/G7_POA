
documento.ready(inicio);

function inicio() {
    let button = $('.ojoPassword');
    button.on('click', show);
}

function show(){
    let input = $(this).parent().children('input');
    if(input.get(0).type === "password"){
        input.get(0).type = "text";
        $(this).removeClass('bi-eye-slash-fill');
        $(this).addClass('bi-eye-fill');
    } else{
        input.get(0).type = "password";
        $(this).removeClass('bi-eye-fill');
        $(this).addClass('bi-eye-slash-fill');
    }
}