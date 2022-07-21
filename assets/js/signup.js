// function eyeFunc(){
//     alert("Hello");
//     // var open = document.getElementById("open-eye");
//     // var close = document.getElementById("closed-eye");
//     // var pass= document.getElementById("password");


//     // if(pass.type === 'password'){

//     // }

// }


// jQuery( document ).on( 'click','#closed-eye', function(){
//     alert("hiiiii");
// });

 
 
 jQuery( document ).on( 'submit','.signup', function(){
        var name = jQuery("#name").val();
        var email = jQuery("#email").val();
        var password = jQuery("#password").val();
   
        // if(name =="" || email=="" || password==""){
        //     document.getElementById("message").innerHTML = "Empty fields found";
        //    //   alert("Empty fields found");
        //    return false;
        // }

        if(name=="" && email=="" && password ==""){
            document.getElementById("message").innerHTML = "All fields are empty";
            return false;
        }

        else if(name==""){
            document.getElementById("message").innerHTML = "Name is empty";
            return false;
        }

        else if(email==""){
            document.getElementById("message").innerHTML = "Email is empty";
            return false;

        }

        else if(password==""){
            document.getElementById("message").innerHTML = "Password is empty";
            return false;
        }

        else{
            if(password.length < 6){
                document.getElementById("message").innerHTML = "Password must contain atleast 6 characters";
                return false;
           }
        }
 });



// password eye 
//  $("#closed-eye").click(function(){
//     alert("Hello");
//     $("#closed-eye").hide();
//     $("#open-eye").css("display","block")
//  });


