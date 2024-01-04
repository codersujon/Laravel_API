<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{
    /**
     * Student Register (POST, formdata) 	--> Open API Route
     */

    public function register(Request $request){

        // Validation 
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:students",
            "password" => "required|confirmed",
            "phone_number" => "required|unique:students",
        ]);

        // Student model
        Student::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "phone_number" => $request->phone_number,
        ]);

        // Response
        return response()->json([
            "status" => true,
            "message" => "Student Created Successfully!" 
        ]);
    }

    /**
     * Student Login (POST, formdata)	--> Open API Route
     */
    
    public function login(Request $request){

    }

    /**
     * Student Profile (GET)		--> Protected API Route
     */

    public function profile(){

    }

    /**
     * Student Logout (GET)
     */
    public function logout(){
        
    }
}
