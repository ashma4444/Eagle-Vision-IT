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
