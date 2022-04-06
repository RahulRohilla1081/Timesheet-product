<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class addProjectController extends Controller
{
     public function index()
    {
        $collection= Http::get("http://localhost/timesheet_api/project/get.php")->json()  ;
        return  view('addProjectScreen')->with(compact('collection'));
        

    }
}
