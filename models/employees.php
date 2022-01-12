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



}