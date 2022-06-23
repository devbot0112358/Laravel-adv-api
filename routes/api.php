<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\ProjectController;
use App\Models\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// API Phase 1 (Without Authentication)
Route::get("list-customer",[CustomerController::class,"getAllCustomer"]);
Route::get("single-customer/{id}",[CustomerController::class,"getSingleCustomer"]);
Route::post("add-customer",[CustomerController::class,"store"]);
Route::put("update-customer/{id}",[CustomerController::class,"update"]);
Route::delete("delete-customer/{id}",[CustomerController::class,"delete"]);

// API Phase 2 ( Authenticate by Sanctum)
Route::post("register", [StudentController::class, "register"]);
Route::post("login", [StudentController::class, "login"]);

Route::group(["middleware" => ["auth:sanctum"]], function(){
    Route::get("profile",[StudentController::class,"profile"]);
    Route::get("logout",[StudentController::class,"logout"]);

    Route::post("create-project",[ProjectController::class,"createProject"]);
    Route::get("list-project",[ProjectController::class,"listProject"]);
    Route::post("update-project/{id}",[ProjectController::class,"updateProject"]);
    Route::get("single-project/{id}",[ProjectController::class,"singleProject"]);
    Route::delete("delete-project/{id}",[ProjectController::class,"deleteProject"]);
});

// API Phase 3 (Authenticate by laravel Passport)