<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Auth;

class employeeController extends Controller
{
   
   public function index()
    {
   
       $screen= Http::get("http://localhost/timesheet_api/employee/getemp.php ")->json();
       $collection= Http::get("http://localhost/timesheet_api/reportingManager/getrmdetails.php")->json();
       $employeeID= Http::get("http://localhost/timesheet_api/employeeID/getemp_id.php")->json();       
        return  view('addEmployee')->with(compact('screen','collection','employeeID'));
    }

        public function store(Request $request)
        {
            $EMPLOYEE_ID=$request->get('EMPLOYEE_ID');
            $EMPLOYEE_FIRST_NAME=$request->get('EMPLOYEE_FIRST_NAME');
            $EMPLOYEE_MIDDLE_NAME=$request->get('EMPLOYEE_MIDDLE_NAME');
            $EMPLOYEE_LAST_NAME=$request->get('EMPLOYEE_LAST_NAME');
            $EMPLOYEE_EMAIL=$request->get('EMPLOYEE_EMAIL');
            $ADDRESS=$request->get('ADDRESS');
            $CONTACT=$request->get('CONTACT');
            $is_RM=$request->get('is_RM');
            $REPORTING_MANAGER=$request->get('REPORTING_MANAGER');
            $REPORTING_MANAGER_EMAIL_ID=$request->get('REPORTING_MANAGER_EMAIL_ID');
           
            $client=new Client([
                "base_url"=>"http://localhost",
            ]);

            $response=$client->request("POST","http://localhost/timesheet_api/employee/emp_rm_create.php",[
                'json'=>[
                    'EMPLOYEE_ID'=>$EMPLOYEE_ID,
                    'EMPLOYEE_FIRST_NAME'=>$EMPLOYEE_FIRST_NAME,
                    'EMPLOYEE_MIDDLE_NAME'=>$EMPLOYEE_MIDDLE_NAME,
                    'EMPLOYEE_LAST_NAME'=>$EMPLOYEE_LAST_NAME,
                    'EMPLOYEE_EMAIL'=>$EMPLOYEE_EMAIL,
                    'ADDRESS'=>$ADDRESS,
                    'CONTACT'=>$CONTACT,
                    'is_RM'=>$is_RM,
                    'REPORTING_MANAGER'=>$REPORTING_MANAGER,
                    'REPORTING_MANAGER_EMAIL_ID'=>$REPORTING_MANAGER_EMAIL_ID


                ]
            ]);
          
            return redirect('/viewEmployee');

        }
}
