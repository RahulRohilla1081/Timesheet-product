<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createAuthorizationController;
use App\Http\Controllers\userAuthController;
use App\Http\Controllers\createScreenRefController;
use App\Http\Controllers\createRoleController;
use App\Http\Controllers\addProjectController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\viewEmployeeController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\viewClientController;
use App\Http\Controllers\addClientController;
use App\Http\Controllers\viewTimesheet;
use App\Http\Controllers\dailyTimesheetController;
use App\Http\Controllers\employeeTimesheetController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});



Route::view('addClient', 'addClient');



Route::view('dailyTimesheet','dailyTimesheet');





Route::view('employeeDailyTimesheet','employee.employeeDailyTimesheet');
Route::view('employeeWeeklyTimesheet','employee.employeeWeeklyTimesheet');


Route::view('test','test');
Route::view('userdata','userdata');  
Route::view('test','testtest');  




Route::apiResource("createAuthorization", createAuthorizationController::class);
Route::apiResource("createScreenref", createScreenRefController::class);
Route::apiResource("createRole", createRoleController::class);
Route::apiResource("addProjectScreen", addProjectController::class);
Route::apiResource("addEmployee", employeeController::class);
Route::apiResource("project", projectController::class);
Route::apiResource("addClient", addClientController::class);
Route::apiResource("viewTimesheet", viewTimesheet::class);
Route::apiResource("viewClient", viewClientController::class);
Route::apiResource("employeeDailyTimesheet", employeeTimesheetController::class);


Route::get("createAuthorization",[createAuthorizationController::class,'index']);
Route::get("createScreenref",[createScreenRefController::class,'index']);
Route::get("createRole",[createRoleController::class,'index']);
Route::get("addProjectScreen",[addProjectController::class,'index']);




Route::get("project",[projectController::class,'index']);
Route::get("viewEmployee",[viewEmployeeController::class,'index']);
Route::get("viewClient",[viewClientController::class,'index']);
Route::get("addClient",[addClientController::class,'index']);
Route::get("viewTimesheet",[viewTimesheet::class,'index']);
Route::get("dailyTimesheet",[dailyTimesheetController::class,'index']);
Route::get("employeeDailyTimesheet",[employeeTimesheetController::class,'index']);



Route::get("user",[createAuthorizationController::class,'store']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\HomeController@index');
