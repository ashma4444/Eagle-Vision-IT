$( document ).ready(function() {
    $("#message").hide();

    $( document ).on( 'submit','.signup', function(){
        var name = jQuery("#name").val();
        var email = jQuery("#email").val();
        var password = jQuery("#password").val();
   
        if(name=="" && email=="" && password ==""){
            $("#message").slideDown(500);
            document.getElementById("message").innerHTML = "All fields are empty";
            return false;
        }else if(name == "" && email == ""){
            $("#message").slideDown(500);
            document.getElementById("message").innerHTML = "Name and email are empty";
            return false;
        }else if(name == "" && password == ""){
            $("#message").slideDown(500);
            document.getElementById("message").innerHTML = "Name and password are empty";
            return false;
        }else if(email == "" && password == ""){
            $("#message").slideDown(500);
            document.getElementById("message").innerHTML = "Email and password are empty";
            return false;
        }else if(name==""){
            $("#message").slideDown(500);
            document.getElementById("message").innerHTML = "Name is empty";
            return false;
        }else if(email==""){
            $("#message").slideDown(500);
            document.getElementById("message").innerHTML = "Email is empty";
            return false;

        }else if(password==""){
            $("#message").slideDown(500);
            document.getElementById("message").innerHTML = "Password is empty";
            return false;
        }else{
            if(password.length < 6){
                $("#message").slideDown(500);
                document.getElementById("message").innerHTML = "Password must contain atleast 6 characters";
                return false;
           }
        }
    });
});
 
 






