<?php

?>

<div class="container-fluid" style="margin-top:30px;">
<div class="panel panel-default">
    <div class="panel-heading" style="background: #428bca;">
        Postulados
    </div>
    <div class="panel-body">
        <div class="col col-md-12" id="datatable_postulados">

        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
        $("#datatable_postulados").load("../datatable/tab_post.php");
    });
</script>