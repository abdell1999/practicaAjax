<?php
    include("models/users.php");

    class AjaxController {
        
        /** Recibe la petición de Ajax. El email del usuario le llega por POST.
         *  Devuelve la URL donde está alojada la imagen de perfil del usuario.
         */
        public function getFotoPerfil() {
            $users = new Users();
            $foto = $users->getPhoto($_REQUEST["email"]);
            echo $foto;
        }
    }
