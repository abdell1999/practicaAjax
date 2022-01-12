<?php

include_once ("view.php");
include_once ("models/employees.php");

class EmployeesController {

    private $view, $employees;

    public function __construct() {
    
        $this->view = new View();
        $this->employees = new Employees();
    }

    public function index($data = null){

        $data['employees'] = $this->employees->get();
        $this->view->show("resources/show", $data);

    }








}
