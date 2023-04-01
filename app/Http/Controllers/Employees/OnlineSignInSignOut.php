<?php

namespace App\Http\Controllers\Employees;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Attendance,Employee};
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;



class OnlineSignInSignOut extends Controller
{
    public function attendance(Request $request, $id,$company_id)
    {
        
       $time_in = gmdate("H:i:s".strtotime(time()));
       $time_out = gmdate("H:i:s".strtotime(time()));
       $date = date('Y-m-d');
       
       
  //Configured Check In Time
        
        $standard_time_in_configured = Employee::find($id)->schedule;
        $normal_log_in_time = Carbon::createFromTimeString($standard_time_in_configured->time_in);

//Configured Check Out Time
        $standard_time_out_configured = Employee::find($id)->schedule;
        $normal_log_out_time = Carbon::createFromTimeString($standard_time_in_configured->time_out);


// Check if the employee is on time
        if (Carbon::createFromTimeString($time_in)->lte($normal_log_in_time)) {
            $ontime_status = 1;
        } else {
            $ontime_status = 0;
        }

        //Check if User has already signed In
        $check_login = Attendance::whereDate('date', "=", date('Y-m-d'))
        ->where('security_number', "=", $company_id)
        ->where('employee_id', "=", $id)->whereNotNull('time_in')
        ->exists();

        //Check if User has already signed Out
        $check_out = Attendance::whereDate('date', "=", date('Y-m-d'))
        ->where('security_number', "=", $company_id)
        ->where('employee_id', "=", $id)->whereNotNull('time_out')
        ->exists();

        if ($check_login) {
            Alert::error('Checked In Already','You have checked in for today');
            return redirect()->login();
        }
        elseif(!$check_login && !$check_out) {
            Attendance::create([
                'date' => $date,
                'time_in' => Carbon::createFromTimeString($time_in)->lte($normal_log_in_time) ? $standard_time_in_configured->time_in : $time_in,
                'security_number' => $company_id,
                'employee_id' => $id,
                'ontime_status' => $ontime_status
                ]);
        }
elseif ($check_login && !$check_out) {
            $check_out = Attendance::whereDate('date', "=", $date)->latest()->first();
            $check_out->date = $date;
            $check_out->time_out = Carbon::createFromTimeString($time_out)->gte($normal_log_out_time) ? $standard_time_out_configured->time_out : $time_out;
            $check_out->security_number = $company_id;
            $check_out->employee_id = $id;
            $check_out->save();
        }

        else{
            Alert::error('Checked Out Already','You have already checked out for today');
            return redirect()->login();
        }
    }
}