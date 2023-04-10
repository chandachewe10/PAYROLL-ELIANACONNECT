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
    public function attendance($id,$company_id)
    {
       
       $time_in = gmdate('H:i:s', strtotime('+ 2 hours'));
       $time_out =gmdate('H:i:s', strtotime('+ 2 hours'));
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
        $check_login = Attendance::whereDate('date', "=", $date)
        ->where('security_number', "=", $company_id)
        ->where('employee_id', "=", $id)->whereNull('time_in')
        ->exists();

        //Check if User has already signed Out
        $check_out = Attendance::whereDate('date', "=", $date)
        ->where('security_number', "=", $company_id)
        ->where('employee_id', "=", $id)->whereNull('time_out')
        ->exists();

       
        if($check_login) {
            Attendance::create([
                'date' => $date,
                'time_in' => Carbon::createFromTimeString($time_in)->lte($normal_log_in_time) ? $standard_time_in_configured->time_in : $time_in,
                'security_number' => $company_id,
                'employee_id' => $id,
                'ontime_status' => $ontime_status
                ]);
                return 'You have checked in Successfully at '.$time_in .'on '.$date;
               // Alert::success('Checked In','You have checked in Successfully at '.$time_in .'on '.$date );
               // return redirect('/login_view');
        }
elseif ($check_out) {
            $check_out = Attendance::whereDate('date', "=", $date)->latest()->first();
            $check_out->date = $date;
            $check_out->time_out = Carbon::createFromTimeString($time_out)->gte($normal_log_out_time) ? $standard_time_out_configured->time_out : $time_out;
            $check_out->security_number = $company_id;
            $check_out->employee_id = $id;
            $check_out->save();

            return 'You have checked out Successfully at '.$time_out .'on '.$date;
           // Alert::success('Checked Out','You have checked out Successfully at '.$time_out .'on '.$date );
            //return redirect('/login_view');

        }

        else{
            return 'You have already checked out for today'; 
           // Alert::error('Checked Out Already','You have already checked out for today');
            // return redirect('/login_view');
        }
    }
}