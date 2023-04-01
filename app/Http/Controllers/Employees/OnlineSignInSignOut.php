<?php

namespace App\Http\Controllers\Employees;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\{Attendance,Employee,employee_kyc};
use Stevebauman\Location\Facades\Location;
use Carbon\Carbon;
use App\Schedule;
use Auth;


class OnlineSignInSignOut extends Controller
{
    //
    public function sign_in(Request $request)
    {
      
      
      //Temporal Denial Starts
      
   // Session::flash("warnings", "Whooops sign in failed, please go back to your office and sign in!");
    // return redirect('/employees_dashboard');//->route($this->folder.'dashboard');  
      
      //Temporal Denial Ends
      
          // Check KYC
      $check_kyc = employee_kyc::where('employee_email',"=",Auth::guard('Employees')->user()->email)->latest()->first();
      
        if(empty($check_kyc->borrower_photo_signature)){
            Session::flash('warnings', 'Please Finish Yor KYC Forms First');
            return redirect('/employees_dashboard');//->route($this->folder.'dashboard');
              
        } 
      
      
      
      // Check Payroll Status
     $check_payroll = Employee::where('email',"=",Auth::guard('Employees')->user()->email)->first();
       
        if(($check_payroll->status==0)){
            Session::flash('warnings', 'Please apply to be added on the payroll first');
            return redirect('/employees_dashboard');//->route($this->folder.'dashboard');      
        }          
      
      
      
             
        if(($check_payroll->status==2)){
            Session::flash('warnings', 'Please wait for payroll application approval first');
            return redirect('/employees_dashboard');//->route($this->folder.'dashboard');
           
        }  
      
      
if ($position = Location::get($request->ip())) {
    $lat = $position->latitude;
    $long = $position->longitude;

    $employee_branch = Employee::where('email', "=", Auth::guard('Employees')->user()->email)->first();

    if ($employee_branch->branch_name == 0) { // Employee belongs to the main company HQ branch
        $company_latitude = Admin::where('security_number', "=", Auth::guard('Employees')->user()->security_number)->first()->latitude;
        $company_longitude = Admin::where('security_number', "=", Auth::guard('Employees')->user()->security_number)->first()->longitude;
    } else { // Employee belongs to a certain Branch
        $company_branch = \App\Branches::find($employee_branch->branch_name);

        if ($company_branch) { // Check if the Branch Exists
            $company_latitude = $company_branch->latitude;
            $company_longitude = $company_branch->longitude;
        } else {
            Session::flash("warnings", "Whooops check in failed, Branch does not exist. Contact Company Principal Person!");
            return redirect('/employees_dashboard');//->route($this->folder.'dashboard');
        }
    }
}
        
       
        if(empty($company_latitude) || empty($company_longitude)){
        Session::flash("warnings", "Whooops check in failed, You company has not yet mapped the Branch or HQ location you belong to. Contact Company Principal Person!");
        return redirect('/employees_dashboard');//->route($this->folder.'dashboard');  
        }
           
         else{
         $distance = $this->distance("$company_latitude", "$company_longitude","$lat", "$long");
         }  
        
      
        $time = time();
        date_default_timezone_set('Africa/Johannesburg');


// Check if the user has already signed in for today  

$check_dates = Attendance::whereDate('date',"=",date('Y-m-d', $time))
->where('security_number',"=",Auth::guard('Employees')->user()->security_number)
->where('employee_id',"=",Auth::guard('Employees')->user()->id)->whereNotNull('time_in')
->exists();

if($check_dates){
    Session::flash("warnings", "Whooops check in failed, you have already checked in for today!");
    return redirect('/employees_dashboard');//->route($this->folder.'dashboard');     
}






if ($distance > 10){
    Session::flash("warnings", "Whooops sign in failed, please go back to your check out point and check in!");
    return redirect('/employees_dashboard');//->route($this->folder.'dashboard');  
}
   

  
else{
    return view('employees/attendance/attendance', [
        'latitude' => $lat,
        'longitude' => $long,
        'distance' => $distance,
        'time_in' =>  date('H:i', $time),
        'hours_worked' =>  0,
        'current_date' => date('Y-m-d', $time),
        'employee_id' => Auth::guard('Employees')->user()->employee_id
 ]);   
}

}

       
   




   private function distance($latitude1, $longitude1, $latitude2, $longitude2) {
     
    $p1 = deg2rad($latitude1);
	$p2 = deg2rad($latitude2);
	$dp = deg2rad($latitude2 - $latitude1);
	$dl = deg2rad($longitude2 - $longitude1);
	$a = (sin($dp/2) * sin($dp/2)) + (cos($p1) * cos($p2) * sin($dl/2) * sin($dl/2));
	$c = 2 * atan2(sqrt($a),sqrt(1-$a));
	$r = 6371008; // Earth's average radius, in meters
	$d = $r * $c;
	return $d; // distance, in meters
     
        
    }



       // Submit Credentials for sign in 


       public function sign_in_submit(Request $request){


        $validate = Validator::make($request->all(), [
            'employee_name' => 'required|string',
            'date' => 'required',
			'employee_id' => 'required|string',
            'time_in' => 'required|string'                  
			
		]);
       
		
		if($validate->fails() ){
			return Redirect()->back()->with([
								'status'=>false,
								'errors'=>$validate->errors()
							]);
		}



// Check if the employee is on time 
$time_in = Carbon::createFromTimeString($request->time_in);
$standard_time_in_configured = Employee::find(Auth::guard('Employees')->user()->id)->schedule;
$normal_log_in_time = Carbon::createFromTimeString($standard_time_in_configured->time_in);

if ($time_in->lte($normal_log_in_time)) {
    $ontime_status = 1;
} else {
    $ontime_status = 0;
}



        $reporting = Attendance::create([
        'date' => $request->date,
        'time_in' => $time_in->lte($normal_log_in_time) ?  $standard_time_in_configured->time_in : $request->time_in,
        'security_number' => Auth::guard('Employees')->user()->security_number,
        'employee_id' => Auth::guard('Employees')->user()->id, 
        'ontime_status' => $ontime_status
        ]);
           
        

        Session::flash("success", "Attendance registered successfully on $request->date at $request->time_in");
        return redirect('/employees_dashboard');//->route($this->folder.'dashboard');  




       }



       public function sign_out (Request $request)
       {
         
               // Check KYC
      $check_kyc = employee_kyc::where('employee_email',"=",Auth::guard('Employees')->user()->email)->latest()->first();
      
        if(empty($check_kyc->borrower_photo_signature)){
            Session::flash('warnings', 'Please Finish Yor KYC Forms First');
            return redirect('/employees_dashboard');//->route($this->folder.'dashboard');
              
        } 
      
      
      
      // Check Payroll Status
     $check_payroll = Employee::where('email',"=",Auth::guard('Employees')->user()->email)->first();
       
        if(($check_payroll->status==0)){
            Session::flash('warnings', 'Please apply to be added on the payroll first');
            return redirect('/employees_dashboard');//->route($this->folder.'dashboard');      
        }          
      
      
      
             
        if(($check_payroll->status==2)){
            Session::flash('warnings', 'Please wait for payroll application approval first');
            return redirect('/employees_dashboard');//->route($this->folder.'dashboard');
           
        }
         
         
if ($position = Location::get($request->ip())) {
    $lat = $position->latitude;
    $long = $position->longitude;

    $employee_branch = Employee::where('email', "=", Auth::guard('Employees')->user()->email)->first();

    if ($employee_branch->branch_name == 0) { // Employee belongs to the main company HQ branch
        $company_latitude = Admin::where('security_number', "=", Auth::guard('Employees')->user()->security_number)->first()->latitude;
        $company_longitude = Admin::where('security_number', "=", Auth::guard('Employees')->user()->security_number)->first()->longitude;
    } else { // Employee belongs to a certain Branch
        $company_branch = \App\Branches::find($employee_branch->branch_name);

        if ($company_branch) { // Check if the Branch Exists
            $company_latitude = $company_branch->latitude;
            $company_longitude = $company_branch->longitude;
        } else {
            Session::flash("warnings", "Whooops check out failed, Branch does not exist. Contact Company Principal Person!");
            return redirect('/employees_dashboard');//->route($this->folder.'dashboard');
        }
    }
} 
         if(empty($company_latitude) || empty($company_longitude)){
        Session::flash("warnings", "Whooops check out failed, You company has not yet mapped the Branch or HQ location you belong to. Contact Company Principal Person!");
        return redirect('/employees_dashboard');//->route($this->folder.'dashboard');  
        }
           
         else{
         $distance = $this->distance("$company_latitude", "$company_longitude","$lat", "$long");
         }  
           $time = time();
           date_default_timezone_set('Africa/Johannesburg');
   
   
   // Check if the user has already signed In for today  
   
   $check_dates = Attendance::whereDate('date',"=",date('Y-m-d', $time))
   ->where('employee_id',"=",Auth::guard('Employees')->user()->id)->exists();
   
   if(!$check_dates){
       Session::flash("warnings", "Whooops check out failed, please check in first!");
       return redirect('/employees_dashboard');//->route($this->folder.'dashboard');     
   }
   
   
   
   
   //return $distance;
   
   if ($distance > 10){
       Session::flash("warnings", "Whooops check out failed, please go back to your check out point and check out!");
       return redirect('/employees_dashboard');//->route($this->folder.'dashboard');  
   }
      
   
     
   else{
       return view('employees/attendance/sign_out', [
           'latitude' => $lat,
           'longitude' => $long,
           'distance' => $distance,
           'time_out' =>  date('H:i', $time),
           'current_date' => date('Y-m-d', $time),
           'employee_id' => Auth::guard('Employees')->user()->employee_id
    ]);   
   }
   
   }
   
 
          
       
   
   



              // Submit Credentials for sign out 


              public function sign_out_submit(Request $request){


                $validate = Validator::make($request->all(), [
                    'employee_name' => 'required|string',
                    'date' => 'required',
                    'employee_id' => 'required|string',
                    'time_out' => 'required|string'                  
                    
                ]);
               
                
                if($validate->fails() ){
                    return Redirect()->back()->with([
                                        'status'=>false,
                                        'errors'=>$validate->errors()
                                    ]);
                }
 $time = time();
 date_default_timezone_set('Africa/Johannesburg');       
        
 // Get todays attendance  
 $check_dates = Attendance::whereDate('date',"=",date('Y-m-d', $time))
 ->where('security_number',"=",Auth::guard('Employees')->user()->security_number)
 ->where('employee_id',"=",Auth::guard('Employees')->user()->id)->whereNotNull('time_in')
 ->first();
                
                
// Check if knocking off time is above the standard time 
$time_out = Carbon::createFromTimeString($request->time_out);
$standard_time_out_configured = Employee::find(Auth::guard('Employees')->user()->id)->schedule;
$normal_log_out_time = Carbon::createFromTimeString($standard_time_out_configured->time_out);                
$time_log_out = $time_out->gte($normal_log_out_time) ?  $standard_time_out_configured->time_out : $request->time_out;                
                
                
 
 if($check_dates) {

    $reporting_time_was = $check_dates->time_in;
    $worked_time = strtotime($time_log_out) - strtotime($reporting_time_was);
    $worked_hours = number_format(($worked_time/3600),2);  
    if($worked_hours >= 1 ){
        $worked_hours-=1;  // Subtract 1 hour for lunch if hours worked is greater or equal 1 
    }
   /*
   if(($worked_hours - 1) < 0) {
     
    Session::flash("warnings", "Whooops sign out failed, you need to reach a minimum of 4 working hours in order to sign out, but your current working hours is $worked_hours hours!");
    return redirect('/employees_dashboard');//->route($this->folder.'dashboard');   
     
   }
   */
    
    
 
  
   
   
   
    $check_dates->update([
        'time_out' => $time_log_out,
        'hours_worked' => $worked_hours       
    ]);      
    

    Session::flash("success", "Checked Out successfully at $request->date at $request->time_out with $worked_hours as hours worked");
    return redirect('/employees_dashboard');//->route($this->folder.'dashboard');  

 } 


              
        
        
        
               }
        






}