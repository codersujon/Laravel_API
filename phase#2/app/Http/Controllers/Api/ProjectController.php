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
        $studentId = auth()->user()->id;
        $projects = Project::where("student_id", $studentId)->get();

        if(!empty($projects)){
            return response()->json([
                "status"=> false,
                "message"=> "Projects found successfully!",
                "data"=>$projects
            ]);
        }

        return response()->json([
            "status"=> false,
            "message"=> "No Project Found!"
        ]);
    }

    /**
     * Get Single Project Details (GET)	--> Protected API Route
     */
    public function getSingleProject($project_id){
        $studentId = auth()->user()->id;

        
        if(Project::where([
            "id"=> $project_id,
            "student_id"=> $studentId
        ])->exists()){

            $project = Project::where([
                "id"=> $project_id,
                "student_id"=> $studentId
            ])->first();

            return response()->json([
                "status"=> true,
                "message"=> "Project Found Successfully!",
                "data"=> $project
            ]);
        }

        return response()->json([
            "status"=> false,
            "message"=> "No Project Found!"
        ]);

    }

    /**
     * Delete Project (DELETE)		--> Protected API Route
     */
    public function deleteProject($project_id){

    }
}
