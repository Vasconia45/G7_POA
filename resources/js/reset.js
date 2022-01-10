let iniciar = $("document");
iniciar.ready(inicio);

function inicio(){
    let buttonSend = $("#sendButton");
    buttonSend.click(envio);
}

function envio(){
    let email = $("#EmailReset").val();
    $.post("php/reset.php", {email: email},function(data) {
        alert(data);
    });
}
