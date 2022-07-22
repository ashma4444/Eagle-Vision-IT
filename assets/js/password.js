$(document).ready(function() {
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
