$( document ).ready(function() {
    $(".ham-cross-span").hide();
    $(".ham-span").click(function(){
        $(".side-bar").toggleClass("show");
        if($(".side-bar").hasClass("show")){
            $(".ham-span i").removeClass("fa-solid fa-bars");
            $(".ham-span i").addClass("fa-solid fa-xmark");
            $(".ham-cross-span").show();
        }
        else{
            $(".ham-span i").removeClass("fa-solid fa-xmark");   
            $(".ham-span i").addClass("fa-solid fa-bars");
        }
    });






    $(".delete-btn").click(function(){
        var result = confirm("Are you sure want to delete?");
        return result;
    });


    $(".update-btn").click(function(){
        
    });

    $( document ).on( 'click', '.pagination-container a', function( e ){
        e.preventDefault();


        var page = $( this ).attr( 'id' );
        
        $( this).siblings().removeClass('active');
        $( this ).addClass( 'active' );

        $.ajax({
            url: "http://localhost/intern-evit/Eagle-Vision-IT/controller/ajax-action.php", 
            type: "POST",
            data: {
                type: 'pagination',
                page_no : page 
            },
            success: function(res){
                if( res ){
                    $( '.table-container table tbody' ).replaceWith( res );
                }
            }
        });
    });
});

