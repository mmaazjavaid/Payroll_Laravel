<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\SalaryAdvance;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request){
        $employee=new Employee();

        if ($request->staffId != null) {
            $employee->staffId = $request->staffId;
        }

        if ($request->workLocation != null) {
            $employee->workLocation = $request->workLocation;
        }

        if ($request->designation != null) {
            $employee->designation = $request->designation;
        }

        if ($request->fullName != null) {
            $employee->fullName = $request->fullName;
        }

        if ($request->nameWithInitials != null) {
            $employee->nameWithInitials = $request->nameWithInitials;
        }

        if ($request->dateOfBirth != null) {
            $employee->dateOfBirth = $request->dateOfBirth;
        }

        if ($request->gender != null) {
            $employee->gender = $request->gender;
        }

        if ($request->nic != null) {
            $employee->nic = $request->nic;
        }

        if ($request->address != null) {
            $employee->address = $request->address;
        }

        if ($request->phone != null) {
            $employee->phone = $request->phone;
        }

        if ($request->homePhone != null) {
            $employee->homePhone = $request->homePhone;
        }

        if ($request->emailAddress != null) {
            $employee->emailAddress = $request->emailAddress;
        }

        if ($request->basicSalary != null) {
            $employee->basicSalary = $request->basicSalary;
        }

        if ($request->attendanceAllowance != null) {
            $employee->attendanceAllowance = $request->attendanceAllowance;
        }

        if ($request->fAndBAllowance != null) {
            $employee->fAndBAllowance = $request->fAndBAllowance;
        }

        if ($request->accountName != null) {
            $employee->accountName = $request->accountName;
        }

        if ($request->accountNumber != null) {
            $employee->accountNumber = $request->accountNumber;
        }

        if ($request->bankName != null) {
            $employee->bankName = $request->bankName;
        }

        if ($request->bankBranch != null) {
            $employee->bankBranch = $request->bankBranch;
        }

        if ($request->nameOfThePerson != null) {
            $employee->nameOfThePerson = $request->nameOfThePerson;
        }

        if ($request->relationship != null) {
            $employee->relationship = $request->relationship;
        }

        if ($request->phoneOfThePerson != null) {
            $employee->phoneOfThePerson = $request->phoneOfThePerson;
        }

        if ($request->addressOfThePerson != null) {
            $employee->addressOfThePerson = $request->addressOfThePerson;
        }

        $employee->save();

        return redirect()->route('employees.dashboard');
    }


    public function updateEmployee(Request $request){

        $data=$request->all();

        $id=$request->id;

        $count=0;
    
        SalaryAdvance::where("fullName",$data["fullName"])->update([
            "workLocation"=>$data["workLocation"]
        ]);
        foreach ($data as $key => $value) {
            
            if($count>2){
                if ($value != null) {

                    $employee=Employee::where('id',$id)->update([

                        $key=>$value

                    ]);

                } 

            }


            $count++;

        }

        return redirect()->route('employees.dashboard');
    }
}
