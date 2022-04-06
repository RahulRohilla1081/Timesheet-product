<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createAuthorizationController;
use App\Http\Controllers\userAuthController;
use App\Http\Controllers\createScreenRefController;
use App\Http\Controllers\createRoleController;
use App\Http\Controllers\addProjectController;




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







Route::view('addProjectScreen', 'addProjectScreen');
Route::view('addProjectButton', 'addProjectButton');

Route::view('addEmployee', 'addEmployee');
Route::view('viewEmployee', 'viewEmployee');


Route::view('addClient', 'addClient');
Route::view('viewClient', 'viewClient');


Route::view('dailyTimesheet','dailyTimesheet');
Route::view('weeklyTimesheet','weeklyTimesheet');
Route::view('viewTimesheet','viewTimesheet');


Route::view('test','test');




Route::apiResource("createAuthorization", createAuthorizationController::class);
Route::apiResource("createScreenref", createScreenRefController::class);
Route::apiResource("createRole", createRoleController::class);


Route::get("createAuthorization",[createAuthorizationController::class,'index']);
Route::get("createScreenref",[createScreenRefController::class,'index']);
Route::get("createRole",[createRoleController::class,'index']);
Route::get("addProjectScreen",[addProjectController::class,'index']);

Route::get("user",[createAuthorizationController::class,'store']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\HomeController@index');
