<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Models\User;

use App\Models\Doctor;
use App\Models\Staff;

use App\Models\Appointment;
use App\Models\Emergency;
use App\Models\Feedback;
use App\Models\Obpatient;
use App\Models\Patient;

class HomeController extends Controller
{
   public function redirect()
   {
    if(Auth::id())
    {
        if(Auth::user()->usertype=='0')
        {
            
            $emergency = Emergency::all();
            $staff = staff::all();
            $doctor = doctor::all();
            return view('user.home', compact('doctor', 'staff', 'emergency'));
        }

       
        else
        {
            
            $appoint = Appointment::count();
            $doctor = Doctor::count();
            $doctor_data = Doctor::all();
            $obpatient = Obpatient::count();
            $intpatient = Patient::count();
            $staff = Staff::count();
            
            $tenDaysBefore = now()->subDays(1)->format('Y-m-d');
            $intreport = Patient::whereBetween('created_at', [$tenDaysBefore, now()])->count();
            $obreport = Obpatient::whereBetween('created_at', [$tenDaysBefore, now()])->count();
            
            return view('admin.home1', compact('appoint', 'doctor', 'obpatient', 'intpatient','staff','intreport','obreport', 'doctor_data' )); 
        }
    }
    else
    {
        return redirect()->back();
    }
   }

   public function index ()
   {

    if(Auth::id())
    {
        return redirect('home');
    }
    else
    {
    $emergency = Emergency::all();
    $staff = staff::all();
    $doctor = doctor::all(); 
    return view('dashboard', compact('doctor', 'staff', 'emergency'));
    }
   }

   public function createApp($id) //edit doctor
    {

        $doctor=doctor::find($id);
        $emergency = Emergency::all();

        return view('user.createapp', compact('doctor', 'emergency')); 
        
    }
 
   public function appointment(Request $request)
   {
        $data = new appointment;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->doctor=$request->doctor;

        $data->date=$request->date;
        
        $data->slot=$request->slot;

        $data->phone=$request->number;        

        $data->message=$request->message; 


        $data->status='In Progress';

        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }
         
        $data->save();

        return redirect()->back()->with('message', 'Request Submitted Successfully'); 
   }

   public function myappointment()
   {
    if(Auth::id())
   {

    $userid=Auth::user()->id;
    $appoint=appointment::where('user_id', $userid)->get();
    $emergency=Emergency::all();

    return view('user.my_appointment', compact('appoint', 'emergency')); 
   }
   else
   {
    return redirect()->back();
   }
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function add_feedback(Request $request){

    $feedback =new Feedback();
    
    $feedback->feedback = $request->feedback;

    $feedback->save();
    return redirect()->back();
    }
}
