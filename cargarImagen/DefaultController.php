<?php
    include("models/users.php");

    class DefaultController {
        
        /** Muestra una lista de usuarios sin fotos de perfil, que se cargarán por Ajax
         */
        public function defaultAction() {
            $users = new Users();
            $data["list_users"] = $users->getAll();
            View::show('users', $data);
        }
    }
