$( document ).ready(function() {
    $(".ham-cross-span").hide();
    // $(".menu").hide();

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

        if(page){
            var prevID = page-1;
            if(prevID < 0){
                $(".prev").attr("id", 0);
            }else{
                $(".prev").attr("id", prevID);
            }
        }

        var nextid = parseInt( page ) + 1;        
        var max = $(this).parent().data( "max-page" ); 
        if(nextid > max){
            $(".next").attr("id", 3);
        }else{
            $(".next").attr("id", nextid);
        }
        
        $.ajax({
            url: "http://localhost/intern-evit/Eagle-Vision-IT/controller/ajax-action.php", 
            type: "POST",
            data: {
                type: 'pagination',
                page_no : page 
            },// before send -> loading class halne
            success: function(res){
                if( res ){
                    $( '.table-container table tbody' ).replaceWith( res );
                    // lodaing class hataune
                }
            }
        });
        // prev/ next function
        if( $(this).hasClass( 'next' ) ){
            var active = $( this ).siblings( '.active' );
            $( active ).removeClass( 'active' );
            $( active ).next().addClass( 'active' );
        }else if( $( this ).hasClass( 'prev' ) ){
            var active = $( this ).siblings( '.active' );
            $( active ).removeClass( 'active' );
            $( active ).prev().addClass( 'active' );
        }else{
            $( this).siblings().removeClass('active');
            $( this ).addClass( 'active' );
        }
    });


    // $(document).on('click', '.nav-info i', function(){
    //     $(".menu").toggle();
    // });
});

