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
          $rmdetails= Http::get("http://localhost/timesheet_api/reportingManager/getrmdetails.php")->json();
        return  view('viewClient')->with(compact('collection','rmdetails'));

    }
     public function store(Request $request)
        {

           
            $CUSTOMER_CODE=$request->get('CUSTOMER_CODE');
           $START_MONTH=$request->get('START_MONTH');
            $START_YEAR=$request->get('START_YEAR');
            $CUSTOMER_FULL_NAME=$request->get('CUSTOMER_FULL_NAME');
            $CUSTOMER_EMAIL_ID=$request->get('CUSTOMER_EMAIL_ID');
            $CUSTOMER_LOCATION=$request->get('CUSTOMER_LOCATION');
            $REPORTING_MANAGER=$request->get('REPORTING_MANAGER');
            $REPORTING_MANAGER_EMAIL_ID=$request->get('REPORTING_MANAGER_EMAIL_ID');
           
     
           
            $client=new Client([
                "base_url"=>"http://localhost",
            ]);

            $response=$client->request("POST","http://localhost/timesheet_api/client/api-update.php",[
                'json'=>[
                   
                    'CUSTOMER_CODE'=>$CUSTOMER_CODE,
                    'START_MONTH'=>$START_MONTH,
                    'START_YEAR'=>$START_YEAR,
                    'CUSTOMER_FULL_NAME'=>$CUSTOMER_FULL_NAME,
                    'CUSTOMER_EMAIL_ID'=>$CUSTOMER_EMAIL_ID,
                    'CUSTOMER_LOCATION'=>$CUSTOMER_LOCATION,
                    'REPORTING_MANAGER'=>$REPORTING_MANAGER,
                    'REPORTING_MANAGER_EMAIL_ID'=>$REPORTING_MANAGER_EMAIL_ID
                   
                ]
            ]);

            return redirect('/viewClient');

        }
}
