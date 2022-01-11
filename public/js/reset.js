let iniciar = $("document");
iniciar.ready(inicio);

function inicio() {
    $("#ModalReset").submit(function(){
        if ($("#EmailReset").val().length < 1) {
            alert("Is obligatory to enter an email");
            return false;

        } else if ($("#EmailReset").val().indexOf('@', 0) == -1 || $("#mail").val().indexOf('.', 0) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You need a valid email adress',
              })
            return false;
        }
    });
}

