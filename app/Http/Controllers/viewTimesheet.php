<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Auth;


class viewTimesheet extends Controller
{
      public function index()
    {
   
       $employee= Http::get("http://localhost/timesheet_api/employee/getemp.php ")->json();
       $timesheet= Http::get("http://localhost/timesheet_api/timesheet/gettimesheet.php ")->json();
        return  view('viewTimesheet')->with(compact('employee','timesheet'));
    }

      public function store(Request $request)
        {
            $DATE=$request->get('DATE');
            $CUSTOMER_NAME=$request->get('CUSTOMER_NAME');
            $PROJECT_NAME=$request->get('PROJECT_NAME');
            $PHASE=$request->get('PHASE');
            $ACTIVITY=$request->get('ACTIVITY');
            $DESCRIPTION=$request->get('DESCRIPTION');
            $HOURS=$request->get('HOURS');
           
            $client=new Client([
                "base_url"=>"http://localhost",
            ]);

            $response=$client->request("POST","http://localhost/timesheet_api/timesheet/timesheet_create_api.php",[
                'json'=>[
                    'DATE'=>$DATE,
                    'CUSTOMER_NAME'=>$CUSTOMER_NAME,
                    'PROJECT_NAME'=>$PROJECT_NAME,
                    'PHASE'=>$PHASE,
                    'ACTIVITY'=>$ACTIVITY,
                    'DESCRIPTION'=>$DESCRIPTION,
                    'HOURS'=>$HOURS,


                ]
            ]);

            return redirect('/viewTimesheet');

        }

}
