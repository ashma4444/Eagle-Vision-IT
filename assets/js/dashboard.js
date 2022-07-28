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
});

