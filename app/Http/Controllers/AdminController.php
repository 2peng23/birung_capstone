<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;


use App\Models\Staff;
use App\Models\Patient;
use App\Models\Obpatient;

use App\Models\Appointment;
use App\Models\Emergency;
use Notification;
use App\Jobs\DeleteEmergencyData;
use App\Models\Feedback;
use App\Notifications\SendMailNotification; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function addview() //sidebar add dcottor
    {
        return view ('admin.add-doctor1');
    }
    
    public function addStaff() //sidebar add dcottor
    {
        return view ('admin.add-staff1');
    }

    

    public function upload(Request $request)
    {
        $doctor = new Doctor;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;
    
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->specialty = $request->specialty;
    
        $doctor->date1 = $request->date1;
        $doctor->date2 = $request->date2;
        $doctor->date3 = $request->date3;
        $doctor->date4 = $request->date4;
        $doctor->date5 = $request->date5;
        $doctor->date6 = $request->date6;

        $doctor->time_from1 = $request->time_from1;
        $doctor->time_from2 = $request->time_from2;
        $doctor->time_from3 = $request->time_from3;
        $doctor->time_from4 = $request->time_from4;
        $doctor->time_from5 = $request->time_from5;
        $doctor->time_from6 = $request->time_from6;

        
        $doctor->time_to1 = $request->time_to1;
        $doctor->time_to2 = $request->time_to2;
        $doctor->time_to3 = $request->time_to3;
        $doctor->time_to4 = $request->time_to4;
        $doctor->time_to5 = $request->time_to5;
        $doctor->time_to6 = $request->time_to6;
        

        
        $doctor->timeslot1 = is_array($request->timeslot1) ? implode(',', $request->timeslot1) : '';
        $doctor->timeslot2 = is_array($request->timeslot2) ? implode(',', $request->timeslot2) : '';
        $doctor->timeslot3 = is_array($request->timeslot3) ? implode(',', $request->timeslot3) : '';
        $doctor->timeslot4 = is_array($request->timeslot4) ? implode(',', $request->timeslot4) : '';
        $doctor->timeslot5 = is_array($request->timeslot5) ? implode(',', $request->timeslot5) : '';
        $doctor->timeslot6 = is_array($request->timeslot6) ? implode(',', $request->timeslot6) : '';

    
        $doctor->save();
    
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }
    


    public function uploadStaff(Request $request) //get doctor image on files
    {
        $staff = new staff;
        $image = $request->file;
        $imagename=time(). '.' . $image-> getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $staff->image=$imagename;

        $staff->name=$request->name;

        $staff->phone=$request->phone;

        $staff->role=$request->role;

        
        

        $staff->save();

        return redirect()->back()->with('message', 'Staff Added Successfully'); 

    }



    

    

    public function showappointment(Request $request)
{
    $pageSize = $request->input('pagesize', 10); // default to 10 if not provided
    $appointment_data = DB::table('appointments')->paginate($pageSize);

    $emergency_data = emergency::all();
    return view('admin.showappointment1', compact('appointment_data', 'emergency_data')); 
} 




    

public function approve($id)
{
    $data = appointment::find($id);
    $data->status = 'Approved';
    $data->save();

    $details = [
        'greetings' => 'Dear Mr/Mrs ' . $data->name . ',',
        'body' => 'Your appointment with Doctor ' . $data->doctor . ' on ' . date('l,F d, Y', strtotime($data->date)) .' '. $data->slot. ' has been approved. Kindly go to our clinic based on your appointment schedule.',
        'actiontext' => 'View appointment details ',
        'actionurl' => url('myappointment'),
        'endpart' => ' Thank You!'
    ];

    // Check if email exists before sending email notification
    if (!empty($data->email)) {
        Notification::send($data, new SendmailNotification($details)); 
    }

    // Construct the request body
    $body = [
        'number' => $data->phone,
        'message' => $details['greetings'].$details['body']. $details['actiontext']. $details['actionurl'],
        'sendername' => 'Birung',
        'apikey' => 'bf09f02bd326ac4b087d104786368fdf' // Replace with your Semaphore API key
    ];

    // Send the request using Guzzle HTTP client
    $client = new \GuzzleHttp\Client();
    $response = $client->post('https://api.semaphore.co/api/v4/messages', [
        'form_params' => $body
    ]);

    // Check the response status code
    $statusCode = $response->getStatusCode();
    if ($statusCode === 200) {
        // SMS sent successfully
        return redirect()->back()->with('message', 'Patient Successfully Notified!');
    } else {
        // SMS sending failed
        return response()->json(['error' => 'SMS sending failed']);
    }
} 




    



    public function cancel($id) //cancel appointment
    {
        $data = appointment::find($id);
        $data->status = 'Denied';
        $data->save();

        $details = [
            'greetings' => 'Dear Mr/Mrs ' . $data->name . ',',
            'body' => 'Your appointment with Doctor ' . $data->doctor . ' on ' . date('l,F d, Y', strtotime($data->date)) .' '. $data->slot. ' has been denied.',
            'actiontext' => 'View appointment details ',
            'actionurl' => url('myappointment'),
            'endpart' => ' Thank you!'
        ];

        // Check if email exists before sending email notification
        if (!empty($data->email)) {
            Notification::send($data, new SendmailNotification($details));
        }

        // Construct the request body
        $body = [
            'number' => $data->phone,
            'message' => $details['greetings'].$details['body']. $details['actiontext']. $details['actionurl'],
            'sendername' => 'Birung',
            'apikey' => 'bf09f02bd326ac4b087d104786368fdf' // Replace with your Semaphore API key
        ];

        // Send the request using Guzzle HTTP client
        $client = new \GuzzleHttp\Client();
        $response = $client->post('https://api.semaphore.co/api/v4/messages', [
            'form_params' => $body
        ]);

        // Check the response status code
        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            // SMS sent successfully
            return redirect()->back()->with('message', 'Patient Successfully Notified!');
        } else {
            // SMS sending failed
            return response()->json(['error' => 'SMS sending failed']);
        }
    }
    public function deleteapp($id) //delete patient
    {
        $data=appointment::find($id);
        $data->delete();
        

        return redirect()->back();
    }
    
    public function showdoctor() //sidebar showdoctor
    {

        $doctor_data=doctor::all();

        return view('admin.showdoctor1', compact('doctor_data'));
        
    }

    public function showStaff() //sidebar showdoctor
    {

        $staff_data=staff::all();

        return view('admin.showstaff1', compact('staff_data'));
        
    }

    public function editdoctor($id) //edit doctor
    {

        $doctor_data=doctor::find($id);

        return view('admin.editdoctor1', compact('doctor_data')); 
        
    }

    public function editStaff($id) //edit doctor
    {

        $staff_data=staff::find($id);

        return view('admin.editstaff', compact('staff_data'));
        
    }
   
    
    public function deletedoctor($id) //delete doctor
    {
        $data=doctor::find($id);
        $data->delete();
        

        return redirect()->back();
    }

    public function deleteStaff($id) //delete doctor
    {
        $data=staff::find($id);
        $data->delete();
        

        return redirect()->back();
    }

    public function doctorupdate(Request $request, $id)
    {
        $doctor = doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->email=$request->email;
        $doctor->specialty=$request->specialty;
        
        $doctor->date1 = $request->date1;
        $doctor->date2 = $request->date2;
        $doctor->date3 = $request->date3;
        $doctor->date4 = $request->date4;
        $doctor->date5 = $request->date5;
        $doctor->date6 = $request->date6;

        $doctor->time_from1 = $request->time_from1;
        $doctor->time_from2 = $request->time_from2;
        $doctor->time_from3 = $request->time_from3;
        $doctor->time_from4 = $request->time_from4;
        $doctor->time_from5 = $request->time_from5;
        $doctor->time_from6 = $request->time_from6;

        
        $doctor->time_to1 = $request->time_to1;
        $doctor->time_to2 = $request->time_to2;
        $doctor->time_to3 = $request->time_to3;
        $doctor->time_to4 = $request->time_to4;
        $doctor->time_to5 = $request->time_to5;
        $doctor->time_to6 = $request->time_to6;

        
        $doctor->timeslot1 = $request->timeslot1;
        $doctor->timeslot2 = $request->timeslot2;
        $doctor->timeslot3 = $request->timeslot3;
        $doctor->timeslot4 = $request->timeslot4;
        $doctor->timeslot5 = $request->timeslot5;
        $doctor->timeslot6 = $request->timeslot6;

        $image=$request->file;

        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension(); 

        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;
          }
        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Details Updated Successfully');
    }

    public function staffUpdate(Request $request, $id)
    {
        $staff = staff::find($id);

        $staff->name=$request->name;
        $staff->phone=$request->phone;
        $staff->role=$request->role;
        
        

        $image=$request->file;

        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension(); 

        $request->file->move('doctorimage', $imagename);
        $staff->image=$imagename;
          }
        $staff->save();

        return redirect()->back()->with('message', 'Staff Details Updated Successfully');
    }

    public function sendmail($id)
    {
        $data=appointment::find($id);

        return view('admin.sendmail', compact('data'));
    }
    public function sendemail(Request $request, $id)
    {
        $data=appointment::find($id);
        $details=
        [
            'greetings' => $request->greetings,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data, new SendmailNotification($details));

        return redirect()->back()->with('message', 'Email Sent Successfully!');


    }

    
    
    public function emergency(Request $request)
    {
        $feedback = Feedback::all();
        // $feedback = Feedback::where('created_at', '>=', now()->subDay())->get(); //1 day

        $emerge = emergency::paginate(5);
        
        return view('admin.emergency', compact('emerge', 'feedback')); 
    }
   

    public function add_emergency(Request $request)
{
    $emergency_data =new Emergency();
    
    $emergency_data->message = $request->message;
    $emergency_data->date = $request->date;
    // $emergency_data->duration = $request->duration;
    $emergency_data->time_from = $request->time_from;
    $emergency_data->time_to = $request->time_to;

    $emergency_data->save();
    
   



        $appointments = Appointment::all();

foreach ($appointments as $appointment) {
    // Check if email and phone exist before sending email and SMS notifications
    if (!empty($appointment->email) && !empty($appointment->phone)) {
        // Construct the email notification details
        $emailDetails = [
            'greetings' => 'Hello!,',
            'body' => ' All appointments ' . ' on ' . date('l,F d, Y', strtotime($emergency_data->date)) .' from '. 
            date("g:i A", strtotime($emergency_data->time_from)). ' to '. date("g:i A", strtotime($emergency_data->time_to)). ' has been cancelled '.
            'due to '. $emergency_data->message,
            'actiontext' => 'View appointment details ',
            'actionurl' => url('myappointment'),
            'endpart' => ' Thank you!'
        ];

        // Send the email notification
        Notification::send($appointment, new SendmailNotification($emailDetails));

        // Construct the SMS notification details
        $smsDetails = [
            'number' => $appointment->phone,
            'message' => $emailDetails['greetings'].$emailDetails['body']. $emailDetails['actiontext']. $emailDetails['actionurl'],
            'sendername' => 'Birung',
            'apikey' => 'bf09f02bd326ac4b087d104786368fdf' // Replace with your Semaphore API key
        ];

        // Send the SMS notification using Guzzle HTTP client
        $client = new \GuzzleHttp\Client();
        $response = $client->post('https://api.semaphore.co/api/v4/messages', [
            'form_params' => $smsDetails
        ]);

        // Check the response status code
        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            // SMS sent successfully
            // Do something here if needed
        } else {
            // SMS sending failed
            // Do something here if needed
        }
    }
}

// Redirect back with success message after all notifications have been sent
return redirect()->back()->with('message', 'Patients Successfully Notified!');

    }

    public function deleteEmergency($id) //delete doctor
    {
        $data=emergency::find($id);
        $data->delete();

        Feedback::query()->delete();
        

        return redirect()->back();
    }


    public function int_report(Request $request)
    {
        $ddate = $request->input('ddate');
        $period = $request->input('period');
    
        if ($ddate) {
            // Get the start and end dates based on the selected period
            // $endDate = Carbon::parse($ddate)->endOfDay();
            // $startDate = Carbon::parse($ddate)->startOfDay();
            switch ($period) {
                case 'daily':
                    $startDate = Carbon::parse($ddate)->startOfDay();
                    $endDate = Carbon::parse($ddate)->endOfDay();
                    break;
                case 'weekly':
                    $startDate = Carbon::parse($ddate);
                    $endDate = Carbon::parse($ddate)->addDays(6)->endOfDay();
                    break;
                case 'monthly':
                    $startDate = Carbon::parse($ddate)->startOfDay();
                    $endDate = Carbon::parse($ddate)->addDays(30)->endOfDay();
                    break;
                default:
                    $startDate = Carbon::now()->startOfYear();
                    $endDate = Carbon::now()->endOfYear();
            }
    
            // Query the database for internal medicine patients
            $int = DB::table('patients')
                ->whereBetween('updated_at', [$startDate, $endDate])
                ->paginate(10);
    
            // // Query the database for ob-gyne patients
            // $ob = DB::table('obpatients')
            //     ->whereBetween('updated_at', [$startDate, $endDate])
            //     ->paginate(10);
    
            // // Query the database for appointments
            // $appoint = DB::table('appointments')
            //     ->whereBetween('created_at', [$startDate, $endDate])
            //     ->paginate(10);
    
            // Return the search results view with the appropriate data
            return view('admin.int_report', compact('int'));
        } else {
            // If no date is provided, just show the paginated list of patients and appointments
            $int = Patient::paginate(5); // Change 10 to the number of patients you want to show per page
            // $ob = Obpatient::paginate(5);
            // $appoint = Appointment::paginate(5);
    
            return view('admin.int_report', compact('int'));
        }
    }

    public function ob_report(Request $request)
    {
        $ddate = $request->input('ddate');
        $period = $request->input('period');
    
        if ($ddate) {
            // Get the start and end dates based on the selected period
            // $endDate = Carbon::parse($ddate)->endOfDay();
            // $startDate = Carbon::parse($ddate)->startOfDay();
            switch ($period) {
                case 'daily':
                    $startDate = Carbon::parse($ddate)->startOfDay();
                    $endDate = Carbon::parse($ddate)->endOfDay();
                    break;
                case 'weekly':
                    $startDate = Carbon::parse($ddate);
                    $endDate = Carbon::parse($ddate)->addDays(6)->endOfDay();
                    break;
                case 'monthly':
                    $startDate = Carbon::parse($ddate)->startOfDay();
                    $endDate = Carbon::parse($ddate)->addDays(30)->endOfDay();
                    break;
                default:
                    $startDate = Carbon::now()->startOfYear();
                    $endDate = Carbon::now()->endOfYear();
            }
    
            // Query the database for internal medicine patients
            // $int = DB::table('patients')
            //     ->whereBetween('updated_at', [$startDate, $endDate])
            //     ->paginate(10);
    
            // // Query the database for ob-gyne patients
            $ob = DB::table('obpatients')
                ->whereBetween('updated_at', [$startDate, $endDate])
                ->paginate(10);
    
            // // Query the database for appointments
            // $appoint = DB::table('appointments')
            //     ->whereBetween('created_at', [$startDate, $endDate])
            //     ->paginate(10);
    
            // Return the search results view with the appropriate data
            return view('admin.ob_report', compact('ob'));
        } else {
            // If no date is provided, just show the paginated list of patients and appointments
            // $int = Patient::paginate(5); // Change 10 to the number of patients you want to show per page
            $ob = Obpatient::paginate(5);
            // $appoint = Appointment::paginate(5);
    
            return view('admin.ob_report', compact('ob'));
        }
    }

    public function app_report(Request $request)
    {
        $ddate = $request->input('ddate');
        $period = $request->input('period');
    
        if ($ddate) {
            // Get the start and end dates based on the selected period
            // $endDate = Carbon::parse($ddate)->endOfDay();
            // $startDate = Carbon::parse($ddate)->startOfDay();
            switch ($period) {
                case 'daily':
                    $startDate = Carbon::parse($ddate)->startOfDay();
                    $endDate = Carbon::parse($ddate)->endOfDay();
                    break;
                case 'weekly':
                    $startDate = Carbon::parse($ddate);
                    $endDate = Carbon::parse($ddate)->addDays(6)->endOfDay();
                    break;
                case 'monthly':
                    $startDate = Carbon::parse($ddate)->startOfDay();
                    $endDate = Carbon::parse($ddate)->addDays(30)->endOfDay();
                    break;
                default:
                    $startDate = Carbon::now()->startOfYear();
                    $endDate = Carbon::now()->endOfYear();
            }
    
            // Query the database for internal medicine patients
            // $int = DB::table('patients')
            //     ->whereBetween('updated_at', [$startDate, $endDate])
            //     ->paginate(10);
    
            // // Query the database for ob-gyne patients
            // $ob = DB::table('obpatients')
            //     ->whereBetween('updated_at', [$startDate, $endDate])
            //     ->paginate(10);
    
            // // Query the database for appointments
            $appoint = DB::table('appointments')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->paginate(10);
    
            // Return the search results view with the appropriate data
            return view('admin.app_report', compact('appoint'));
        } else {
            // If no date is provided, just show the paginated list of patients and appointments
            // $int = Patient::paginate(5); // Change 10 to the number of patients you want to show per page
            $ob = Obpatient::paginate(5);
            $appoint = Appointment::paginate(5);
    
            return view('admin.app_report', compact('appoint'));
        }
    }







    
}

