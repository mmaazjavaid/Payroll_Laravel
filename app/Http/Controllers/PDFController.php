<?php
  
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Mail\paySlipMail;
use App\Models\Location;
use App\Models\PaySlip;
use App\Models\SalaryAdvance;
use Illuminate\Support\Facades\Mail;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        $employee=Employee::where("id",$request->employee)->get();
   
    $data = [
        'paySlip' => $request->paySlip,
        'employee' =>$employee
    ];
      
    $pdf = PDF::loadView('pdfSlip', $data)->setOptions(['defaultFont' => 'sans-serif']);
    // return PDF::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
    // Storage::put("public/pdf/{$employee[0]->fullName}.pdf", $pdf->output());

    $path = public_path('pdf/');
    $fileName =  $employee[0]->fullName . '.' . 'pdf' ;
    // $pdf->save($path . '/' . $fileName);
    return $pdf->download($fileName);
        
    }
    public function sendMail(Request $request){

        $employee = Employee::where("id", $request->employee)->get();

        $data = [
                'paySlip' => $request->paySlip,
                'employee' => $employee
            ];
        $advance=SalaryAdvance::where("fullName",$employee[0]->fullName)->update([
            "cutted"=>true
        ]);
        $pdf = PDF::loadView('pdfSlip', $data)->setOptions(['defaultFont' => 'sans-serif']);
        // return PDF::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
        // Storage::put("public/pdf/{$employee[0]->fullName}.pdf", $pdf->output());

        $path = public_path('pdf/');
        $fileName =  $employee[0]->fullName . $request->paySlip["startDate"] . '.' . 'pdf';
        $pdf->save($path . '/' . $fileName);

        $filePath = "pdf" . '/' . $fileName;

        Mail::to("{$employee[0]->emailAddress}")->send(new paySlipMail($filePath));
       


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

        
        return redirect()->route("success.Mail");


    }
}