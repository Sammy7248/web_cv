<?php

?>

<div class="container-fluid" style="margin-top: 30px;">
    <div class="panel panel-default">
        <div class="panel-heading" style="background: #428bca;">
            Vacantes
        </div>
        <div class="panel-body">
            <div class="col col-md-12" id="datatable_vacantes">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#datatable_vacantes").load("../datatable/tab_vac.php");
    });
</script>