<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\StudentResource;
use App\Http\Resources\ProfileResource;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\LoginRequest;

class StudentController extends Controller
{
    // Register Api
    //URL:
    public function register(StudentRequest $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->phone_no = isset($request->phone_no) ? $request->phone_no: "" ;

        $student->save();

        //response
        return response()->json([
            "status" => 1,
            "message" => "Student Registered Successfully."
        ], 200);
    }
    // Login Api
    //URL:
    public function login(LoginRequest $request)
    {
        $student = Student::where("email", "=", $request->email)->first();

        if(isset($student->id)){

            if(Hash::check($request->password, $student->password)){

                // create a token
                $token = $student->createToken("auth_token")->plainTextToken;

                /// send a response
                return response()->json([
                    "status" => 1,
                    "message" => "Student logged in successfully",
                    "access_token" => $token
                ]);
            }else{

                return response()->json([
                    "status" => 0,
                    "message" => "Password didn't match"
                ], 404);
            }
        }else{

            return response()->json([
                "status" => 0,
                "message" => "Student not found"
            ], 404);
        }
    }
    //Profile Api
    //URL:
    public function profile()
    {
        $data = new ProfileResource(auth()->user());
        return response()->json([
            "status" => 1,
            "message" => "Student Profile Information.",
            "data" => $data
        ]);
    }
    //logout Api
    //URL:
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            "status" => 1,
            "message" => "Student Logged Out Successfully."
        ],200);
    }
}
