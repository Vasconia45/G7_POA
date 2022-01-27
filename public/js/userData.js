$('#document').ready(function () {


    $("#RegisterModal").submit(function () {
        console.log("ok");
        if ($("#Passwd1").val().length != 0 && $("#Passwd2").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Is neccessary to confirm your password please.',
            })
            return false;
        }
    });
});
