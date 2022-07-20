function validation() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if(name=="" || email=="" || password==""){
        document.getElementById("message").innerHTML = "Empty fields found";
        // alert("Empty fields found");
    }

    else{
        if(password.length < 6){
            document.getElementById("message").innerHTML = "Password must contain atleast 6 characters!";
        }
    }
    return false;
}

