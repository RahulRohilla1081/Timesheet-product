<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class createAuthorizationController extends Controller
{
    public function index()
    {
        $collection= Http::get("http://localhost/timesheet_api/authorization/get.php")->json()  ;
        return  view('createAuthorization')->with(compact('collection'));

    }
}
