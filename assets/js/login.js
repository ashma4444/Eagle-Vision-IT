$( document ).ready(function() {
    $("#message").hide();

    $("#form-submit").submit(function(){
        var email = jQuery("#email").val();
        var password = jQuery("#password").val();
        
        if(email == "" && password == ""){
            $("#message").slideDown(500);
            $("#message").html("Empty fields found");
            return false;
        }

        else if(email == ""){
            $("#message").slideDown(500);
            $("#message").html("Name is empty");
            return false;
        }

        else if(password == ""){
            $("#message").slideDown(500);
            $("#message").html("Password is empty");
            return false;
        }
    });
});
