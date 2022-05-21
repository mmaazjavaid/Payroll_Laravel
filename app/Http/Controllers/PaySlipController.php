<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Location;
use App\Models\PaySlip;
use Illuminate\Http\Request;

class PaySlipController extends Controller
{
    public function store(Request $request){
        // dd($request->paySlip);
        $data=$request->paySlip;
        $paySlip=new PaySlip();
        $location_id=0;
        if($request->paySlip["fullName"]){
            $employee=Employee::where('fullName',$request->paySlip["fullName"])->first();
            $location=Location::where('name',$employee->workLocation)->first();
            $location_id=$location->id;
        }
        $paySlip->locationId=$location_id;
        // $id=$request->id;


        $count=0;

        foreach ($data as $key => $value) {
            
            if($count>0){
                if ($value != null) {
                    $paySlip->$key=$value;
                } 

            }


            $count++;

        }
        $paySlip->save();
        return redirect()->route("index.dashboard");
    }
}
