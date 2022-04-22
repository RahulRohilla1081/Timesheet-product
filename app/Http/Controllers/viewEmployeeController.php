<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Auth;

class viewEmployeeController extends Controller
{
     public function index()
    {
   
       $screen= Http::get("http://localhost/timesheet_api/employee/getemp.php ")->json();
        return  view('viewEmployee')->with(compact('screen'));
    }

}
