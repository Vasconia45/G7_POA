let iniciar = $("document");
iniciar.ready(inicio);

function inicio(){
    let buttonSend = $("#sendButton");
    buttonSend.submit(envio);
}

function envio(){
    let email = $("#EmailReset").val();
    $.post("{{ route('resetMail')}}", {email: email},function(data) {
        
    });
}
