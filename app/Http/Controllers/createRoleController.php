<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class createRoleController extends Controller
{
     public function index()
    {
        $collection= Http::get("http://localhost/timesheet_api/role/get.php")->json()  ;
        return  view('createRole')->with(compact('collection'));

    }
}
