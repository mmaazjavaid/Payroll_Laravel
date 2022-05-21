<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\PaySlip;
use Illuminate\Http\Request;
use DB;
class LocationController extends Controller
{
    public function viewLocations(){
        $NetPays = PaySlip::select(
            "locationId",
            DB::raw("(sum(netPay)) as total_netPay"),
            DB::raw("(DATE_FORMAT(endDate, '%m-%Y')) as month_year")
        )
            ->orderBy('locationId')
            ->groupBy(DB::raw("DATE_FORMAT(endDate, '%m-%Y')"), "locationId")
            ->get();

           
        $NetPays_location_specific = PaySlip::select(
            "locationId",
            DB::raw("(sum(netPay)) as total_netPay"),
        )
            ->orderBy('locationId')
            ->groupBy("locationId")
            ->get();
    
        $locations=Location::select("id")->get();
        $data=array();
        $i=0;
        foreach ($locations as $location) {
            $data[$i]=array();
            foreach ($NetPays as $NetPay) {
                if($location->id==$NetPay->locationId){
                    
                    array_push($data[$i],$NetPay);
                }
            }
            $i++;
        }
        
        $net_pay_loc=array();
        // foreach ($NetPays_location_specific as $NetPay_location_specific) {
        //     array_push($net_pay_loc,$NetPay_location_specific->total_netPay);
        // }

        

       $location_n=Location::orderBy("id")->get();
       $location_names=array();
       foreach ($location_n as $location_n_s) {
        array_push($location_names,$location_n_s->name);
       }

       $counter=0;
       for ($i=0; $i <count($data); $i++) { 
        if(!$data[$i]){
            continue;
        }else{
            $net_pay_loc[$i]=$NetPays_location_specific [$counter]->total_netPay;
            $counter++;

        }
    }




    $basicSalaries = PaySlip::select(
        "locationId",
        DB::raw("(sum(basicSalary)) as total_basic"),
        DB::raw("(DATE_FORMAT(endDate, '%m-%Y')) as month_year")
    )
        ->orderBy('locationId')
        ->groupBy(DB::raw("DATE_FORMAT(endDate, '%m-%Y')"), "locationId")
        ->get();

       
    $basic_Salary_location_specific = PaySlip::select(
        "locationId",
        DB::raw("(sum(basicSalary)) as total_basic"),
    )
        ->orderBy('locationId')
        ->groupBy("locationId")
        ->get();

    $locations=Location::select("id")->get();
    $data_basic=array();
    $i=0;
    foreach ($locations as $location) {
        $data_basic[$i]=array();
        foreach ($basicSalaries as $basicSalarie) {
            if($location->id==$basicSalarie->locationId){
                
                array_push($data_basic[$i],$basicSalarie);
            }
        }
        $i++;
    }
    
    $basic_salarie_loc=array();
    // foreach ($NetPays_location_specific as $NetPay_location_specific) {
    //     array_push($net_pay_loc,$NetPay_location_specific->total_netPay);
    // }

    

   $location_n=Location::orderBy("id")->get();
   $location_names=array();
   foreach ($location_n as $location_n_s) {
    array_push($location_names,$location_n_s->name);
   }

   $counter=0;
   for ($i=0; $i <count($data_basic); $i++) { 
    if(!$data_basic[$i]){
        continue;
    }else{
        $basic_salarie_loc[$i]=$basic_Salary_location_specific [$counter]->total_basic;
        $counter++;

    }
}














        // dd($net_pay_loc);   
        // dd($data);
        return view("locations",[
            "basicSalaries"=>$data_basic,
            "basic_salarie_loc"=>$basic_salarie_loc,
            "net_pay_loc"=>$net_pay_loc,
            "NetPays"=>$data,
            "location_names"=>$location_names
        ]);
    }
}
