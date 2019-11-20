$(document).ready(function(){
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
    // $('#select-vacantes').load("../php/select.php");
});