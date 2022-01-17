<?php
    include("models/employees.php");

    class AjaxController {
        
        /** Recibe la petición de Ajax. El email del usuario le llega por POST.
         *  Devuelve la URL donde está alojada la imagen de perfil del usuario.
         */
        public function cargarImagen() {
            $employees = new Employees();
            $imagen = $employees->cargarImagen($_REQUEST["id"]);
            echo $imagen;
        }
    }