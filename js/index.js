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

    $('#select-vacantes').load("../php/select.php");

    // $('#select-vacantes').load("../php/select.php");
});