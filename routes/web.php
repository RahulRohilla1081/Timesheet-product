<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createAuthorizationController;
use App\Http\Controllers\userAuthController;
use App\Http\Controllers\createScreenRefController;
use App\Http\Controllers\createRoleController;


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
    return view('login');


});

Route::get('/createAuthorization', function () {
    return view('createAuthorization');


});


Route::get('/createScreenref', function () {
    return view('createScreenRef');


});

Route::get('/createRole', function () {
    return view('createRole');


});
Route::get('/addProjectScreen', function () {
    return view('addProjectScreen');


});
Route::get('/addProjectButton', function () {
    return view('addProjectButton');


});

Route::get("createAuthorization",[createAuthorizationController::class,'index']);
Route::get("createScreenref",[createScreenRefController::class,'index']);
Route::get("createRole",[createRoleController::class,'index']);
Route::get("login",[userAuthController::class,'userLogin']);


Route::post("user",[userAuthController::class,'userLogin']);
Route::view("login",'loginProfile');