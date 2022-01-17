<?php
     include_once("db.php");

     class Users {

            public function __construct() {
                DB::createConnection(); 
            }

            public function getAll() {
                return DB::dataQuery("SELECT * FROM users");
            }

            public function getPhoto($email) {
                $result = DB::dataQuery("SELECT * FROM users WHERE email = '$email'");
                foreach ($result as $row) {
                    $photo = $row["photo"];
                }
                return $photo;
            }
     }
