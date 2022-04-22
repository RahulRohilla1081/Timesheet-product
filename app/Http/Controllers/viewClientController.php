<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Auth;
class viewClientController extends Controller
{
     public function index()
    {
        $collection= Http::get("http://localhost/timesheet_api/client/get.php")->json();
        return  view('viewClient')->with(compact('collection'));

    }
}
