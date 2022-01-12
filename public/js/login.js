let documento = $("document");

documento.ready(function(){
    $("#LoginModal").submit(function(){
           if($("#email").val().length < 1) {
           alert("Is necessary to enter an email");
                return false;
            }
        });

    $("#LoginModal").submit(function(){
            if($("#passwd").val().length < 1) {
                alert("Is neccessary to enter a password");
                return false;
            }     
    });

})