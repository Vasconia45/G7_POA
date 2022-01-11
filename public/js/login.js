let documento = $("document");

documento.ready(function(){
    $("#LoginModal").submit(function(){
           if($("#email").val().length < 1) {
           alert("Is necessary to enter an email");
                return false;
            } else if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
                alert("You need a valid email adress"); 
                return false;
            }
             
        });

    $("#LoginModal").submit(function(){
            if($("#passwd").val().length < 1) {
                alert("Is neccessary to enter a password");
                return false;
            } else if($("#passwd").val().length < 8) {
                alert("The password needs at least 8 characters");
                return false;
            } else if($("#passwd").val().length > 16 ){
                alert("The password can't have more than 16 characters");
                return false;
            }
                  
    });

})