<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 


use App\Http\Controllers\Controller;



use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;

use GuzzleHttp\Client;

use Auth;

class createRoleController extends Controller
{
     public function index()
    {
        $collection= Http::get("http://localhost/timesheet_api/role/get.php")->json()  ;
        return  view('createRole')->with(compact('collection'));

    }
     public function store(Request $request)
        {
            $ROLE_NAME=$request->get('ROLE_NAME');
            $ROLE_DESCRIPTION	=$request->get('ROLE_DESCRIPTION');
            $AUTH_ID =$request->get('AUTH_ID');
           
           
            $client=new Client([
                "base_url"=>"http://localhost",
            ]);

            $response=$client->request("POST","http://localhost/timesheet_api/role/api-create.php",[
                'json'=>[
                    'ROLE_NAME'=>$ROLE_NAME,
                    'ROLE_DESCRIPTION'=>$ROLE_DESCRIPTION,
                    'AUTH_ID'=>$AUTH_ID,
                ]
            ]);

            return redirect('/createRole');

        }
}
