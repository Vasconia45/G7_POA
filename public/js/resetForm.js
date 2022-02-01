$('#document').ready(function (){

    $("#ResetPasswordModal").submit(function () {
        if ($("#PasswordReset").val().length != 0 && $("#PasswordReset2").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Is neccessary to confirm your password please.',
            })
            return false;
        }else if($("#PasswordReset2").val() != $("#PasswordReset").val()) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'The confirmation password is not correct, please check it.',
              })
            return false;
        }
    });

    $("#ResetPasswordModal").submit(function(){
        if($("#emailResetForm").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'You need to insert an email address please.',
              })
             return false;
         } else if($("#emailResetForm").val().indexOf('@', 0) == -1 || $("#emailResetForm").val().indexOf('.', 0) == -1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'You need a valid email address.',
              })
            return false;
        }
         
     });

});