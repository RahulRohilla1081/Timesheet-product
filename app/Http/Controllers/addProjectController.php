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
        $collection= Http::get("http://localhost/timesheet_api/project/get.php")->json();
         $employee= Http::get("http://localhost/timesheet_api/employee/getemp.php ")->json();
         
        return  view('addProjectScreen')->with(compact('collection','employee'));
    }

      public function store(Request $request)
        {

           
            $PROJECT_ID=$request->get('PROJECT_ID');
           $PROJECT_NAME=$request->get('PROJECT_NAME');
            $PROJECT_DESCRIPTION=$request->get('PROJECT_DESCRIPTION');
            $PROJECT_STATUS=$request->get('PROJECT_STATUS');
            $CLIENT_COMPANY=$request->get('CLIENT_COMPANY');
            $PROJECT_LEADER=$request->get('PROJECT_LEADER');
            $EMP_FULLNAME=$request->get('EMP_FULLNAME');
            $EST_BUDGET=$request->get('EST_BUDGET');
            $EST_AMT_SPEND=$request->get('EST_AMT_SPEND');
            $PROJECT_DURATION=$request->get('PROJECT_DURATION');
            $START_DATE=$request->get('START_DATE');
            $END_DATE=$request->get('END_DATE');
            $OVERDUE=$request->get('OVERDUE');
     
           
            $client=new Client([
                "base_url"=>"http://localhost",
            ]);

            $response=$client->request("POST","http://localhost/timesheet_api/project/api-update.php",[
                'json'=>[
                   
                    'PROJECT_ID'=>$PROJECT_ID,
                    'PROJECT_NAME'=>$PROJECT_NAME,
                    'PROJECT_DESCRIPTION'=>$PROJECT_DESCRIPTION,
                    'PROJECT_STATUS'=>$PROJECT_STATUS,
                    'CLIENT_COMPANY'=>$CLIENT_COMPANY,
                    'PROJECT_LEADER'=>$PROJECT_LEADER,
                    'EMP_FULLNAME'=>$EMP_FULLNAME,
                    'EST_BUDGET'=>$EST_BUDGET,
                    'EST_AMT_SPEND'=>$EST_AMT_SPEND,
                    'PROJECT_DURATION'=>$PROJECT_DURATION,
                    'START_DATE'=>$START_DATE,
                    'END_DATE'=>$END_DATE,
                    'OVERDUE'=>$OVERDUE,
                ]
            ]);

            return redirect('/addProjectScreen')->with('status',"Data Updated Successfully");

        }
    
}
