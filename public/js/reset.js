let iniciar = $("document");
iniciar.ready(inicio);

function inicio() {
    let buttonSend = $("#sendButton");
    buttonSend.submit(validate);
}

function validate() {
        if ($("#mail").val().length < 1) {
            alert("Is obligatory to enter an email");
            return false;

        } else if ($("#mail").val().indexOf('@', 0) == -1 || $("#mail").val().indexOf('.', 0) == -1) {
            alert("You need a valid email adress");
            return false;
        }
}

function envio() {
    let email = $("#EmailReset").val();
    $.post("{{ route('resetMail')}}", { email: email }, function (data) {

    });
}
