<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class ApiController extends Controller
{
    /**
     * Add Employee (POST, formdata)
     */
    public function addEmployee(){
        
        $employee = new Employee(); // instance of employee model
        
        // add-employee
      
    }

    /**
     * List Employee (GET)
     */
    public function listEmployee(){
        
        // list-employee
    }

    /**
     * Single Employee Details (GET)
     */
    public function getSingleEmployee(string $employeeId){

        // single-employee need <EmpID>
    }

    /**
     * Update Employee (PUT, formdata)
     */
    public function updateEmployee(string $employeeId){

        // update-employee need <EmpID>
    }


    /**
     * Delete Employee (DELETE)
     */
    public function deleteEmployee(string $employeeId){

        //delete-employee need <EmpID>
    }

}
