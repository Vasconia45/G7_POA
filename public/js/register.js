

$("document").ready(function(){

    $("#RegisterModal").submit(function(){
        if($("#BirthDateRegister").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Is neccessary to enter your birth date.',
              })
            return false;
        }
              
    });

    $("#RegisterModal").submit(function(){
        if($("#EmailRegister").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'You need to insert an email address please.',
              })
             return false;
         } else if($("#EmailRegister").val().indexOf('@', 0) == -1 || $("#EmailRegister").val().indexOf('.', 0) == -1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'You need a valid email address.',
              })
            return false;
        }
         
     });

     $("#RegisterModal").submit(function(){
        if($("#Passwd2Register").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Is neccessary to confirm your password please.',
              })
            return false;
        } else if($("#Passwd2Register").val() != $("#Passwd1Register").val()) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'The password is not correct.',
              })
            return false;
        }
              
    });

     $("#RegisterModal").submit(function(){
        if($("#Passwd1Register").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'You need to insert a password please.',
              })
            return false;
        } else if($("#Passwd1Register").val().length < 8) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'The password needs to be at least 8 characters.',
              })
            return false;
        } else if($("#Passwd1Register").val().length > 16 ){
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'The password cant have more than 16 characters.',
              })
            return false;
        } else if( !/[^a-zA-Z0-9]/.test( $("#Passwd1Register").val() ) ) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'You need to insert one alphanumeric digit for your password.',
              })
            return false;
         }     
});

    $("#RegisterModal").submit(function(){
        if($("#UsernameRegister").val().length < 1) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'You should insert a Username.',
              })
            return false;
        } else if($("#UsernameRegister").val().length > 20) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'The Username cant have more than 20 digits.',
              })
            return false;
        } 
            
    });

})
