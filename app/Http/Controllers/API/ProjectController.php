<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    //Create Project APi
    //URL:http://127.0.0.1:8000/api/create-project
    public function createProject(ProjectRequest $request)
    {
        $student_id = auth()->user()->id;

        $project = new Project();
        $project->student_id = $student_id;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->duration = $request->duration;

        $project->save();
        return response()->json([
            "status" => 1,
            "message" => "Project Created Successfully."
        ]);

    }
    //List Project APi -GET
    //URL: http://127.0.0.1:8000/api/list-project
    public function listProject()
    {
        $student_id = auth()->user()->id;
        $projects = ProjectResource::collection(Project::where("student_id",$student_id)->get());

        return response()->json([ 
            "status" => 1,
            "message" => "Projects",
            "data" => $projects
        ],200);
    }
    //Update Project APi
    //URL:http://127.0.0.1:8000/api/update-project/{id}
    public function updateProject(ProjectRequest $request, $id)
    {
        $student_id = auth()->user()->id;

        if(Project::where(["id"=> $id, "student_id"=>$student_id])->exists()){
            $project = Project::where('id', $id);
            $project->name = !empty($request->name) ? $request->name : $project->name;
            $project->description = !empty($request->description) ? $request->description : $project->description;
            $project->duration = !empty($request->duration) ? $request->duration : $project->duration;
            return response()->json([
                "status" => 1,
                "message" => "Project Updated Successfully."
            ], 200);

        }else{
            return response()->json([
                "status" => 0,
                "message" => " Project Not Found."
            ], 404);
        }
    }
    //Single Project APi -GET
    //URL:http://127.0.0.1:8000/api/single-project/{id}
    public function singleProject($id)
    {
        $student_id = auth()->user()->id;

        if(Project::where(["id"=> $id,"student_id"=>$student_id])->exists()){
            $details = new ProjectResource(Project::where([
                "id" => $id,
                "student_id" => $student_id
            ])->first());

            return response()->json([
                "status" => 1,
                "message" => "Project Detail",
                "data" => $details
            ],200);
        }else{
            return response()->json([
                "status" => 0,
                "message" => "Project Not Found."
            ], 404);
        }
    }
    //Delete Project APi - DELETE
    //URL:http://127.0.0.1:8000/api/delete-project/{id}
    public function deleteProject($id)
    {
        $student_id = auth()->user()->id;

        if(Project::where([
            "id" => $id,
            "student_id" => $student_id
        ])->exists()){
            $project = Project::where([
                "id" => $id,
                "student_id" => $student_id
            ])->first();

            $project->delete();
            
            return response()->json([
                "status" => 1,
                "message" => "Project Deleted successfully."
            ], 200);
        
        }else{
            
            return response()->json([
                "status" => 0,
                "message" => "Project Not Found."
            ], 404);
        }

    }
}