<?php

include_once ("config.php");
include_once("db.php");

class Employees
{

    public function __construct()
    {
        DB::createConnection();
    }


    public function get()
    {
       $result = DB::dataQuery("SELECT * FROM employees");
       return $result;
    }


    public function cargarImagen($id) {
        $result = DB::dataQuery("SELECT * FROM employees WHERE id = '$id'");
        foreach ($result as $row) {
            $image = $row["image"];
        }
        return $image;
    }


    public function eliminarFila($id){

        $result = DB::dataManipulation("DELETE FROM employees WHERE id = '$id'"); 

        return $result;
    }



}