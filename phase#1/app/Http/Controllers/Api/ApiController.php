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
    public function addEmployee(Request $request){
        
        // VALIDATE POST DATA
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:employees",
            "age" => "required",
            "gender" => "required"
        ]);


        $employee = new Employee();  // instance of employee model

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->age = $request->age;
        $employee->gender = $request->gender;
        $employee->save();

        return response()->json([
            "status" => true,
            "message" => "Employee Saved Successfully!"
        ]);
       
    }

    /**
     * List Employee (GET)
     */
    public function listEmployee(){
        
        $employee = new Employee;
        $data = $employee->all();
      
        if (empty($data)) {
            return response()->json([
                "status" => false,
                "message" => "No Employee Found",
            ]);
        } else {
            return response()->json([
                "status" => true,
                "message" => "Employee Found",
                "data" => $data
            ]);
        }


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
