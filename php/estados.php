<option selected>Selecciona Estado</option>
<?php
    $estados = array("Ciudad de México","Aguascalientes","Baja California",
    "Baja California Sur","Campeche","Chiapas","Chihuahua",
    "Coahuila","Colima","Durango","Guanajuato","Guerrero",
    "Hidalgo","Jalisco","Mexico","Michoacan","Morelos","Nayarit",
    "Nuevo Leòn","Oaxaca","Puebla","Querétaro","Quintana Roo","San Luis Potosi",
    "Sinaloa","Sonora","Tabasco","Tamaulipas","Tlaxcala","Veracruz","Yucatán","Zacatecas"
    );

    for($i=0;$i<count($estados);++$i){

?>
<option value="<?php echo $estados[$i] ?>"><?php echo $estados[$i] ?></option>
<?php
    }
?>