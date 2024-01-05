<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Add Project (POST, formdata)		--> Protected API Route
     */
    public function addProject(Request $request){
        
        // Validation
        $request->validate([
            "title"=> "required",
            "description"=> "required",
        ]);

        // $studentData = auth()->user();
        // $studentId = $studentData->id;

        $studentId = auth()->user()->id;

        // Project Model
        Project::create([
            "student_id" => $studentId,
            "title" =>$request->title,
            "description" =>$request->description,
            "duration" =>$request->duration,
        ]);

        // Response
        return response()->json([
            "status"=> true,
            "message"=>"Project Created Successfully!"
        ]);
    }

    /**
     * Get Project List By Student ID (GET)	--> Protected API Route
     */
    public function getProjectList(){

    }

    /**
     * Get Single Project Details (GET)	--> Protected API Route
     */
    public function getSingleProject($project_id){

    }

    /**
     * Delete Project (DELETE)		--> Protected API Route
     */
    public function deleteProject($project_id){

    }
}
