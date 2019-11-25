$(document).ready(function(){

    // $("#css").load("../php/css.php");
    // $("#js").load("../php/js.php");
    $("[href*=\\#]").click(function(){
        if(location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            && location.hostname == this.hostname
        ){
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name='+ this.hash.slice(1) + ']');

            if($target.length > 0){
                var targetOffset = $target.offset().top;
                $('html, body').animate({scrollTop:targetOffset}, 1000);
                return false;
            }

        }
    });



    $("#cards_cont").load("../php/cards.php");

    $('#select-vacantes').load("../php/select.php");

    $("#estados").load("../php/estados.php");
    var cont = 1;
    $("#togg").click(function(event) {
        event.preventDefault();
        if (cont % 2 != 0) {
            $("#togg #more i").removeClass("fa fa-angle-double-down");
            $("#togg #more i").addClass("fa fa-angle-double-up");
        } else {
            $("#togg #more i").removeClass("fa fa-angle-double-up");
            $("#togg #more i").addClass("fa fa-angle-double-down");
        }
        $(".card .oculto").slideToggle();
        cont = cont + 1;
    });

    var values = [];
    var id_vac = 0;
    var estado = "";

    $('#select-vacantes').change(function(){
        console.log($(this).val());
        id_vac = $(this).val();
    });

    $('#estados').change(function(){
        console.log($(this).val());
        estado = $(this).val();
    });

    $('#enviar').on('click', function(){
        console.log(values);
        var data = new FormData();
        data.append("vacante_id",id_vac);
        data.append("estado",estado);
        
        if($("#nombre").val().length > 0){
            data.append("nombre", $("#nombre").val() );
        }
    
        if($("#apellido").val().length > 0){
            data.append("apellido",$("#apellido").val());
        }

    
        if($("#ciudad").val().length > 0){
            data.append("ciudad",$("#ciudad").val());
        }
        

        if($("#telefono").val().length > 0){
            data.append("telefono",$("#telefono").val());
        }

    
        if($("#correo").val().length > 0){
            data.append("correo",$("#correo").val());
        }

    
        if($("#capacidades").val().length > 0){
            data.append("capacidades",$("#capacidades").val());
        }

        data.append("cv",$('#cv')[0].files[0]);

        $.ajax({
            type:"POST",
            url:"../php/registrarpost.php",
            data:data,
            contentType:false,
            processData:false,
            success:function(){
                $.toast({
                    heading: "Postulado!",
                    text: "Registro Exitoso",
                    showHideTransition: 'fade',
                    icon: "success",
                    position: 'top-right',
                    hideAfter:7000
                }); 
            }
        }).fail(function(x, error){
            $.toast({
                heading: "Error",
                text: "Intentelo nuevamente por favor!",
                showHideTransition: 'fade',
                icon: "error",
                position: 'top-right',
                hideAfter:7000
            });
        });
        $("#postul-form")[0].reset();
        return false;
    });
    // $('#select-vacantes').load("../php/select.php");
});