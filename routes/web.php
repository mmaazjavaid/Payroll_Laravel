<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\generateSlipController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaySlipController;
use App\Http\Controllers\PDFController;
use App\Mail\paySlipMail;
use App\Models\Employee;
use App\Models\Location;
use App\Models\PaySlip;
use App\Models\SalaryAdvance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//////////////////////////////////////// ROUTES FOR NAVIGATION////////////////////////////////////////////
// Route::get('/', function () {
//   ///////////////////total employess///////////////////////////////////
//    $total_employees=Employee::select('*')->get();


//     /////////////////////////This month salareis////////////////////////////
//     $this_month_salaries = PaySlip::select('netPay')
//             ->whereMonth('endDate', Carbon::now()->month)
//             ->get();
//     $this_month_salaries_total=0;        
//     foreach ($this_month_salaries as $this_month_salarie) {
//         $this_month_salaries_total+=$this_month_salarie->netPay;
//     }

//     ////////////////////////Total salaries//////////////////////////////////////
//     $total_salaries=PaySlip::select('netPay')->get();
//     $total_salaries_paid=0;
//     foreach ($total_salaries as $total_salarie) {
//         $total_salaries_paid+=$total_salarie->netPay;
//     }


//     /////////////////////Data According to location///////////////////////////////
//     $locations=Location::select('*')->get();
//     $total_locations=count($locations);
//     $location_based_employess =array();
//     $location_based_this_month_salareies=array();
//     $location_based_total_salries_paid=array();


//     foreach ($locations as $location) {

//         //////////////////employee count///////////////////////////

//         $employee_count=Employee::where("workLocation",$location->name)->get();
//         array_push($location_based_employess,count($employee_count));

//         /////////////////this month salaries/////////////////////

//         $this_month_salaries_location_based = PaySlip::select('netPay')
//         ->whereMonth('endDate', Carbon::now()->month)
//         ->where("locationId",$location->id)
//         ->get();

//         $this_month_salaries_location_based_total=0;
//         foreach ($this_month_salaries_location_based  as $this_month_salarie_location_based ) {
//             $this_month_salaries_location_based_total+= $this_month_salarie_location_based->netPay; 
//         }
//         array_push($location_based_this_month_salareies,$this_month_salaries_location_based_total);
         

//         ///////////////////Total salaries Paid///////////////////////////

//         $total_salaries_based_on_location=PaySlip::select('netPay')
//                                           ->where("locationId",$location->id)
//                                           ->get();
//         $total_salaries_based_on_location_paid=0;
//         foreach ($total_salaries_based_on_location as $total_salarie_based_on_location) {
//             $total_salaries_based_on_location_paid+=$total_salarie_based_on_location->netPay;
//         }
//         array_push($location_based_total_salries_paid,$total_salaries_based_on_location_paid);

//     }
    
//     /////////////////////////////////////Basic Salaries Total///////////////////////////////
//     $basic_total=PaySlip::orderBy("updated_at","DESC")->sum("basicSalary");
    


//     return view('index',[
//         "this_month_salaries_total"=>$this_month_salaries_total,
//         "total_employess"=>count($total_employees),
//         'total_salaries_paid'=>$total_salaries_paid,
//         'locations'=>$locations,
//         'location_based_employess'=>$location_based_employess,
//         'location_based_this_month_salareies'=>$location_based_this_month_salareies,
//         'location_based_total_salries_paid'=>$location_based_total_salries_paid,
//         'basic_total'=>$basic_total
//     ]);
// })->name("index.dashboard")->middleware('auth');



Route::get('/', function () {
    ///////////////////////////////LOCATIONS///////////////////////////////////
    $locations = Location::orderBy("updated_at", "DESC")->get();

    /////////////////////////////THIS MONTH NETPAY ///////////////////////////
    $this_month_netPay = PaySlip::select('netPay')
        ->whereMonth('endDate', Carbon::now()->month)
        ->get();
    $this_month_netPay_total = 0;
    foreach ($this_month_netPay as $this_month_salarie) {
        $this_month_netPay_total += $this_month_salarie->netPay;
    }

    ////////////////////////THIS MONTH TAXES  ////////////////////////////////

    $this_month_basic=PaySlip::select('basicSalary')
    ->whereMonth('endDate', Carbon::now()->month)
    ->get();
    
    $this_month_basic_total=0;
    foreach ($this_month_basic as $single_basic) {
        $this_month_basic_total+=$single_basic->basicSalary;
    }


    /////////////////////THIS MONTH EMPLOYEE RECORDS//////////////////////////////


    $this_month_all_payslips=PaySlip::orderBy("locationId","ASC")->get();

    //////////////////THIS MONTH BY LOCATION////////////////////////////////////

    $locations_net_pay= PaySlip::select(
        "locationId",
        DB::raw("(sum(netPay)) as total_netPay"),
        DB::raw("(sum(basicSalary)) as total_basic")
    )
        ->whereMonth('endDate', Carbon::now()->month)
        ->orderBy('locationId')
        ->groupBy("locationId")
        ->get();
        $i=0;
    
        $past_month_taxes = PaySlip::select(
            DB::raw("(sum(netPay)) as total_netPay"),
            DB::raw("(sum(basicSalary)) as total_basic"),
            DB::raw("DATE_FORMAT(endDate, '%m-%Y') new_date"), 
            DB::raw('YEAR(endDate) year, MONTH(endDate) month')
        )
            
            ->orderBy('updated_at',"desc")
            ->groupBy('month')
            ->get();    

        

    return view("index", [
        "locations" => $locations,
        "this_month_netPay_total"=>$this_month_netPay_total,
        "this_month_basic_total"=>$this_month_basic_total,
        "this_month_all_payslips"=>$this_month_all_payslips,
        "locations_net_pay"=>$locations_net_pay,
        "past_month_taxes"=>$past_month_taxes
    ]);
})->name("index.dashboard")->middleware('auth');


Route::get('/generate_payslip',[generateSlipController::class,"show"] )->name("generate-slip.dashboard")->middleware('auth');


Route::get('/employees', function () {
    $employees=Employee::orderBy('updated_at','DESC')->get();
    return view('employess',[
        'employees'=>$employees
    ]);
})->name("employees.dashboard")->middleware('auth');


Route::get('/locations',[LocationController::class,"viewLocations"])->name("locations.dashboard")->middleware('auth');



//////////////////////////////////////SALARY ADVANCES ROUTE/////////////////////////////////

Route::get('/salary-advances', function () {
    $employees=Employee::select("fullName")->get();
    $salary_advances=SalaryAdvance::orderBy("created_at","DESC")->get();

    return view('salary-advances',[
        "employees"=>$employees,
        "salary_advances"=>$salary_advances
    ]);
})->name("payment-history.dashboard")->middleware('auth');

Route::post("/store_advance",function(Request $request){
    $employee=Employee::select("workLocation")
                        ->where("fullName",$request->fullName)
                        ->first();
    $SalaryAdvance=SalaryAdvance::create($request->all());
    $SalaryAdvance->workLocation=$employee->workLocation;
    $SalaryAdvance->save();
    return redirect()->route("payment-history.dashboard");
})->name('store.advance');


Route::get("/get_advance",function(Request $request){
   $salary_advances =SalaryAdvance::where("fullName",$request->name)
                                        ->where("cutted",false)
                                        ->get();
        $total_salary_advance=0;
        foreach ($salary_advances as $salary_advance) {
            $total_salary_advance+=$salary_advance->amount;
        }
        return $total_salary_advance;                                
});


Route::get("/get_basic",function(Request $request){
    $employee_basic=Employee::select("basicSalary")
                    ->where("fullName",$request->name)
                    ->first();
    return $employee_basic->basicSalary;
});


/////////////////////////////////////////EMPLOYEE CRUD///////////////////////////////////////

Route::get('/employee_form',function(){

    $locations=Location::orderBy("updated_at","DESC")->get();

    return view('add-employee',[
        "locations"=>$locations
    ]);
})->name('form.employee');


Route::post('/add_employee',[EmployeeController::class,'addEmployee'])->name('add.employee');


Route::get('/view_employee',function(Request $request){
    $employee=Employee::where('id',$request->id)->get();
    $payslips=PaySlip::where('fullName',$employee[0]->fullName)->get();
    return view('view-employee',[
        "employee"=>$employee,
        "payslips"=>$payslips
    ]);
})->name('view.employee');


Route::delete('/delete_employee',function(Request $request){
    $employee=Employee::where('id',$request->id);
    $employee->delete();
    return redirect()->route('employees.dashboard');
})->name('delete.employee');


Route::get('/show_edit_form',function(Request $request){
    $locations=Location::orderBy("updated_at","DESC")->get();
    $employee=Employee::where('id',$request->id)->get();
    return view("edit-employee",[
        'id'=>$request->id,
        'employee'=>$employee,
        "locations"=>$locations
    ]);
})->name('editForm.employee');


Route::put('/update_employee',[EmployeeController::class,'updateEmployee'])->name('update.employee');



///////////////////////////////////// LOCATION CRUD /////////////////////////////////////////////

Route::post('/add_location',function(Request $request){
         Location::create([
        "name"=>$request->location
    ]);
    return redirect()->route("locations.dashboard");
})->name("add.location");



///////////////////////////////////////GENERATE PAYSLIP CRUD///////////////////////////////////////////


Route::get("/submmit_slip",[PaySlipController::class,'store'])->name("store.payslip");

Route::get("/singleSlip",function(Request $request){
  
    $payslip=PaySlip::where('id',$request->id)->get();
    $employee=Employee::where('staffId',$request->employeeId)->get();
    // dd($employee[0]->fullName);
    return view("payslip-single",[
        "payslip"=>$payslip,
        "employee"=>$employee
    ]);
})->name("singleSlip.payslip");


Route::get('/new_payslip',[generateSlipController::class,'newSlip'])->name("new.paySlip");

Route::get("/return_slip",function(Request $request){
    
    $employee=Employee::orderBy("updated_at","desc")->get();
    $employee_names=array();
    foreach ($employee as $single_employee) {
            array_push($employee_names,$single_employee->fullName);
    }
    

  return view("return-slip",[
      "payslip"=>$request->paySlip,
      "employee_names"=>$employee_names
  ]);
})->name("returnBack.payslip");


/////////////////////////////////////////////PDF ROUTE/////////////////////////////////////////////////

Route::get('generate-pdf',[PDFController::class,"generatePDF"])->name("make.pdf");


////////////////////////////////////////Route For Mailing/////////////////////////////////////////////

Route::get('sendMail',[PDFController::class,"sendMail"])->name("send.mail");

Route::get('/mail-success',function(){
    return view("mail.successfull");
})->name("success.Mail");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








////////////////////////////Getting attendance and fandB allowance//////////////////////////////////////

Route::get("/attendance_allowance",function(Request $request){
    $employee_basic=Employee::select("attendanceAllowance")
    ->where("fullName",$request->name)
    ->first();
return $employee_basic->attendanceAllowance;
});
Route::get("/fAndB_allowance",function(Request $request){
    $employee_basic=Employee::select("fAndBAllowance")
    ->where("fullName",$request->name)
    ->first();
return $employee_basic->fAndBAllowance;
});



Route::get("/view-single-taxsheet",function(Request $request){
    $payslips_data=PaySlip::select("*")
                           ->whereMonth('endDate', $request->month)
                           ->orderBy("locationId","ASC")
                           ->get();
                           
    return view("view-single-taxsheet",[
        "payslips_data"=>$payslips_data
    ]);
})->name("view-single.taxsheet");