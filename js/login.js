$(document).ready(function(){
    
    $("#ingresar").on('click',function(){
        // var values = [];

        // if($("#username").val().length > 0){
            // values.push({
                // "name":"email",
                // "value": $("#username").val()
            // });
        // }
// 
        // if($("#password").val().length > 0){
            // values.push({
                // "name":"pass",
                // "value": $("#password").val()
            // });
        // }
// 
        // var email = $("#username").val();
        // var pass = $("#password").val();
// 
        // console.log($("#username").val());
        // console.log($("#password").val());
        // $.ajax({
            // type:"POST",
            // url:"validate_user.php",
            // data:{email:email, pass:pass},
            // cache:false,
            // beforeSend:function(){
// 
            // },
            // success:function(){
                // location.href = "../admin/validate_user.php";
            // }
        // });
        $("#login_form")[0].reset();
    });

});