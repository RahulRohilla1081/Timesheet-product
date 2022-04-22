<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Auth;

class createScreenRefController extends Controller
{
    public function index()
    {
     
      
       $collection= Http::get("http://localhost/timesheet_api/screen/get.php ")->json();
       $screen= Http::get("http://localhost/timesheet_api/authorization/get.php ")->json();
        return  view('createScreenRef')->with(compact('collection','screen'));
    }
     public function store(Request $request)
        {
            $SCREEN_NAME=$request->get('SCREEN_NAME');
            $SCREEN_DESCRIPTION=$request->get('SCREEN_DESCRIPTION');
            $SCREEN_LINK=$request->get('SCREEN_LINK');
           
            $client=new Client([
                "base_url"=>"http://localhost",
            ]);

            $response=$client->request("POST","http://localhost/timesheet_api/screen/api-create.php",[
                'json'=>[
                    'SCREEN_NAME'=>$SCREEN_NAME,
                    'SCREEN_DESCRIPTION'=>$SCREEN_DESCRIPTION,
                    'SCREEN_LINK'=>$SCREEN_LINK,

                ]
            ]);

            return redirect('/createScreenref');
        }
}
