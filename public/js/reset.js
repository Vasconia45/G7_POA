let iniciar = $("document");
iniciar.ready(inicio);

function inicio() {
    $("#ModalReset").submit(function(){
        if ($("#EmailReset").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'You need to insert an email address please.',
              })
            return false;

        } else if ($("#EmailReset").val().indexOf('@', 0) == -1 || $("#mail").val().indexOf('.', 0) == -1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'You need a valid email address.',
              })
            return false;
        }
    });
}

