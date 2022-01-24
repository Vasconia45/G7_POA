
$("document").ready(function () {
    $("#LoginModal").submit(function () {
        if ($("#PasswordLogin").val().length < 1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You need to insert a password please.',
            })
            return false;
        }
    });
    $("#LoginModal").submit(function () {
        if ($("#email").val().length < 1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You need to insert an email address please.',
            })
            return false;
        }
    });



})