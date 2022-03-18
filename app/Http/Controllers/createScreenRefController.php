<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class createScreenRefController extends Controller
{
    public function index()
    {
     
      
       $collection= Http::get("http://localhost/timesheet_api/screen/get.php ")->json()  ;
        return  view('createScreenRef')->with(compact('collection'));
    }
}
