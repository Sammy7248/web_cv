<?php

    class conect{

        public function conectar(){
            return mysqli_connect(
                "localhost",
                "root",
                "",
                "web_cv"
            );
        }
        
    }  
?>