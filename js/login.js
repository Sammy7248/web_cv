$(document).ready(function(){
    
    var show = 1;
    $("#show").on("click", function(){
        show+=1;
        if(show%2==0){
            $("#password").attr("type","text");
            $(this).attr('class','glyphicon glyphicon-eye-close');
        }
        else{
            $("#password").attr("type","password");
            $(this).attr("class","glyphicon glyphicon-eye-open");
        }
    });

    $("#clear").click(function(){
        $("#login_form")[0].reset();
    });

    $("#ingresar").on('click',function(){
        location.href = "../admin/validate_user.php";
    });

});