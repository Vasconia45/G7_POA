$('#document').ready(function () {


    $("#userDataModal").submit(function () {
        if ($("#Passwd1").val().length != 0 && $("#Passwd2").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Is neccessary to confirm your password please.',
            })
            return false;
        }else if($("#Passwd2").val() != $("#Passwd1").val()) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'The confirmation password is not correct, please check it.',
              })
            return false;
        }
    });
});
