$( document ).ready(function() {
    $('.hide').hide();

    $("#form-submit").submit(function(){
        function showAnimation(msg){
            messageWrapper.removeClass("hide");
            messageWrapper.addClass("show").text(msg);
            $('.show').show();
        }

        function hideAnimation(){
            if( '' != messageWrapper.text() ){
                setTimeout( function(){
                    messageWrapper.removeClass("show");
                    messageWrapper.addClass("hide");
                }, 5000 );
                setTimeout( function(){     
                    $('.hide').hide();    
                }, 7000 );
            }
        }
        var messageWrapper = $("#message");

        var formInput = $( 'form.login input' );
        var emptyFields = [];
        console.log(formInput);
        var msg = "";

        formInput.each( function( k, v ){
            var val = $( v ).val();
            if( '' == val ){
                emptyFields.push($( v ).attr( 'class' ) );
            }
        });

        if(emptyFields.length>0){
            emptyFields.forEach( function( v ){
                msg += v +", ";
            });

            msg = msg.slice(0, -2);
            msg += " is empty";
            showAnimation(msg);
            hideAnimation();
            return false;
        }
    });
});

$(document).ready(function() {
    // here this = eye-container i

    $( document ).on( 'click', '.eye-container i', function(){
        $( this ).toggleClass("fa-eye-slash");
        $( this ).toggleClass("fa-eye");
        $( this ).parent().toggleClass( 'visible' );
        var passwordField = $( this ).parent().siblings( 'input[name="password"]' );
        if( $( this ).parent().hasClass( 'visible' ) ){
            $( passwordField ).attr('type', 'text');
        }else{
            $( passwordField ).attr('type', 'password');
        }
    } );
});

$( document ).ready(function() {
    $('.hide').hide();

    $( document ).on( 'submit','.signup', function(){
        var messageWrapper = $("#message");

        
        function showAnimation(msg){
            messageWrapper.removeClass("hide");
            messageWrapper.addClass("show").text(msg);
            $('.show').show();
        }

        function hideAnimation(){
            if( '' != messageWrapper.text() ){
                setTimeout( function(){
                    messageWrapper.removeClass("show");
                    messageWrapper.addClass("hide");                      
                }, 5000 );
                setTimeout( function(){     
                    $('.hide').hide();    
                }, 7000 );
            }
        }

        var formInput = $( 'form.signup input' );
        var emptyFields = [];
        var msg = "";

        formInput.each( function( k, v ){
            var val = $( v ).val();
            if( '' == val ){
                emptyFields.push($( v ).attr( 'class' ) );
            }
        });

        if(emptyFields.length>0){
            emptyFields.forEach( function( v ){
                msg += v +", ";
            });

            msg = msg.slice(0, -2);
            msg += " is empty";
            showAnimation(msg);
            hideAnimation();
            return false;
        }else{
            var password = $("#password").val();
            if(password.length < 6){
                console.log(password);
                showAnimation("Password must contain atleast 6 characters");
                hideAnimation();
                return false;
            }
        }
    });
});
