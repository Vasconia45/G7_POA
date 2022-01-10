

documento.ready(function(){

    $("#singup").submit(function(){
        if($("#UsernameRegister").val().length < 1) {
            alert("Is neccessary to enter a user name");
            return false;
        } else if($("#UsernameRegister").val().length > 30) {
            alert("The user name cant have more than 30 digits");
            return false;
        } 
            
    });

    $("#singup").submit(function(){
            if($("#Passwd1Register").val().length < 1) {
                alert("Is neccessary to enter a password");
                return false;
            } else if($("#Passwd1Register").val().length < 8) {
                alert("The password needs at least 8 characters");
                return false;
            } else if($("#Passwd1Register").val().length > 16 ){
                alert("The password can't have more than 16 characters");
                return false;
            }     
    });


    $("#singup").submit(function(){
        if($("#Passwd2Register").val().length < 1) {
            alert("Is neccessary to confirm your password");
            return false;
        } else if($("#Passwd2Register").val() != $("#Passwd1Register").val()) {
            alert("The password is not correct");
            return false;
        }
              
    });


    $("#singup").submit(function(){
        if($("#EmailRegister").val().length < 1) {
        alert("Is obligatory to enter an email");
             return false;
         } else if($("#EmailRegister").val().indexOf('@', 0) == -1 || $("#EmailRegister").val().indexOf('.', 0) == -1) {
            alert("You need a valid email adress"); 
            return false;
        }
         
     });
    
    $("#singup").submit(function(){
        if($("#BirthDateRegister").val().length < 1) {
            alert("Is neccessary to enter your birth date");
            return false;
        }
              
    });

})
