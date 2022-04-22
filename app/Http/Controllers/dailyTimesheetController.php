<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Auth;

class dailyTimesheetController extends Controller
{
  
      public function index()
    {
   
       $client= Http::get("http://localhost/timesheet_api/client/get.php ")->json();
       $project= Http::get("http://localhost/timesheet_api/project/get.php")->json();
        return  view('dailyTimesheet')->with(compact('client','project'));
    }
}
