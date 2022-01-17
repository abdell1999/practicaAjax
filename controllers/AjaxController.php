<?php
    include("models/employees.php");

    class AjaxController {

        private $employees;

        
    public function __construct() {
    
        $this->employees = new Employees();

    }
        
        /** Recibe la petición de Ajax. El email del usuario le llega por.
         *  Devuelve la URL donde está alojada la imagen de perfil del usuario.
         */

        public function cargarImagen() {
            $imagen = $this->employees->cargarImagen($_REQUEST["id"]);
            echo $imagen;
        }


        public function eliminarFila(){
            $result = $this->employees->eliminarFila($_REQUEST["id"]);

        }





    }