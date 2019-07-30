$(function(){
    $('#cadlogin').hide();

    $("#linkCadLogin").click(function () { 
        $('#login').hide();
        $('#cadlogin').show();
    });

    $("#pageLogin").click(function () { 
        $('#cadlogin').hide();
        $('#login').show();
    });

    //pageLogin

 // $('#cadastro').show();
});
