<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Student Register (POST, formdata) 	--> Open API Route
     */

    public function register(Request $request){

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
