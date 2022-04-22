<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 
use App\Http\Controllers\Controller;



use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Auth;

class addProjectController extends Controller
{
     public function index()
    {
        $collection= Http::get("http://localhost/timesheet_api/project/get.php")->json()  ;
        return  view('addProjectScreen')->with(compact('collection'));
    }
     public function store(Request $request)
        {
            $PROJECT_NAME=$request->get('PROJECT_NAME');
            $CLIENT_COMPANY=$request->get('CLIENT_COMPANY');
            $PROJECT_DESCRIPTION=$request->get('PROJECT_DESCRIPTION');
            $EST_BUDGET=$request->get('EST_BUDGET');
            $PROJECT_DURATION=$request->get('PROJECT_DURATION');
            $EST_AMT_SPEND=$request->get('EST_AMT_SPEND');
            $START_DATE=$request->get('START_DATE');
            $PROJECT_LEADER=$request->get('PROJECT_LEADER');
            $END_DATE=$request->get('END_DATE');
            $PROJECT_STATUS=$request->get('PROJECT_STATUS');
          
           
            $client=new Client([
                "base_url"=>"http://localhost",
            ]);

            $response=$client->request("POST","http://localhost/timesheet_api/project/api-create.php",[
                'json'=>[
                    'PROJECT_NAME'=>$PROJECT_NAME, 
                    'CLIENT_COMPANY'=>$CLIENT_COMPANY,
                    'PROJECT_DESCRIPTION'=>$PROJECT_DESCRIPTION,
                    'EST_BUDGET'=>$EST_BUDGET,
                    'PROJECT_DURATION'=>$PROJECT_DURATION,
                    'EST_AMT_SPEND'=>$EST_AMT_SPEND,
                    'START_DATE'=>$START_DATE,
                    'PROJECT_LEADER'=>$PROJECT_LEADER,
                    'END_DATE'=>$END_DATE,
                    'PROJECT_STATUS'=>$PROJECT_STATUS


                ]
            ]);

            return redirect('/addProjectScreen');

        }
}
