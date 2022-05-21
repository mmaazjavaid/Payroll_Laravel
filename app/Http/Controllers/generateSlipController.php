<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\SalaryAdvance;
use Illuminate\Http\Request;
use DB;

class generateSlipController extends Controller
{
    public function show() {
        $employee=Employee::orderBy("updated_at","desc")->get();
        $employee_names=array();
        foreach ($employee as $single_employee) {
                array_push($employee_names,$single_employee->fullName);
        }
    
        ////////////////////////////////salary Advance Sum//////////////////////////////////
    
    
        $salary_advances = SalaryAdvance::select(
            "fullName",
            DB::raw("(sum(amount)) as total_amount"),
        )
            ->orderBy('id')
            ->groupBy("fullName")
            ->get();
    
    
        $advances=array();
        foreach ($salary_advances as $salary_advance) {
            $advances[$salary_advance->fullName]=$salary_advance->total_amount;
        }


    
        return view('generate-slip',[
            "employee_names"=>$employee_names,
            "advances"=>$advances
        ]);
    }

    public function newSlip(Request $request){
        $payslip=$request;


        // $salary_advances =SalaryAdvance::where("fullName",$payslip->fullName)
        //                                 ->where("cutted",false)
        //                                 ->get();
        // $total_salary_advance=0;
        // foreach ($salary_advances as $salary_advance) {
        //     $total_salary_advance+=$salary_advance->amount;
        // }                                
        // $payslip->salaryAdvance=$total_salary_advance;

    
        
        
        $employee=Employee::where('fullName',$request->fullName)->get();
        return view("new-payslip",[
            "payslip"=>$payslip,
            "employee"=>$employee
        ]);
    }
}
