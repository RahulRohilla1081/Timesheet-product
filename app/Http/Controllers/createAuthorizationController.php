<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 





use App\Http\Controllers\Controller;



use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;

use GuzzleHttp\Client;

use Auth;

class createAuthorizationController extends Controller
{
    public function index()
    {
        $collection= Http::get("http://localhost/timesheet_api/authorization/get.php")->json()  ;
        return  view('createAuthorization')->with(compact('collection'));
        

    }
     public function getScreen()
    {
        $screen= Http::get("http://localhost/timesheet_api/screen/get.php")->json()  ;
        return  view('createAuthorization')->with(compact('screen'));

    }

        public function store(Request $request)
        {
            $AUTH_NAME=$request->get('AUTH_NAME');
            $SCREEN_ID=$request->get('SCREEN_ID');
            $MODULE_ID=$request->get('MODULE_ID');
            $DESCRIPTION=$request->get('DESCRIPTION');
           
            $client=new Client([
                "base_url"=>"http://localhost",
            ]);

            $response=$client->request("POST","http://localhost/timesheet_api/authorization/api-create.php",[
                'json'=>[
                    'AUTH_NAME'=>$AUTH_NAME,
                    'SCREEN_ID'=>$SCREEN_ID,
                    'SCREEN_ID'=>$SCREEN_ID,
                    'DESCRIPTION'=>$DESCRIPTION


                ]
            ]);

            return redirect('/createAuthorization');

        }
    
}
