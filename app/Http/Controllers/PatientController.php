<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use PDF;

use App\Models\User;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


 
class PatientController extends Controller 
{
    // public function indexInt(){
    //     $user = User::get();
    //     $data = Patient::get();
    //     return view('admin.intpatient-list', compact ('data'));
    // }
    public function indexInt(Request $request) 
    {
        // $data = DB::table('patients')->paginate(5);
        // return view('admin.intpatient-list1', ['data' => $data]); 

        $pageSize = $request->input('pagesize', 10); // default to 10 if not provided
        $data = DB::table('patients')
                    ->where('updated_at', '>=', now()->subWeek()) //weekly  
                    // ->where('updated_at', '>=', now()->subYear()) //Year
                    ->paginate($pageSize);
        return view('admin.intpatient-list1', compact('data'));

    }

    public function archivePatient(Request $request) 
    {
        $pageSize = $request->input('pagesize', 10);
        $oneWeekAgo = now()->subWeek(); // get the timestamp for 1 week ago
        $data = DB::table('patients')
            ->where('updated_at', '<', $oneWeekAgo)
            ->paginate($pageSize);
        return view('admin.archive-int', compact('data'));
    }

    

    public function addIntPatient()
{

    return view('admin.add-patient1');
}


public function savePatient(Request $request)
{
    $name = $request->name;
    $email = $request->email;
    $age = $request->age;
    $sex = $request->sex;
    $address = $request->address;
    $bday = $request->bday;
    $phone = $request->phone;
    $height = $request->height;
    $weight = $request->weight;
    $bmi = $request->bmi;
    $bp = $request->bp;
    $o2sat = $request->o2sat;
    $hr = $request->hr;
    $temp = $request->temp;
    $diag = $request->diag;
    $prec = $request->prec;
    $notes = $request->notes;

    
    

    $patientdata = new Patient();
    $patientdata->name = $name;
    $patientdata->email = $email;
    $patientdata->age = $age;
    $patientdata->sex = $sex;
    $patientdata->address = $address;
    $patientdata->bday = $bday;
    $patientdata->phone = $phone;
    $patientdata->height = $height;
    $patientdata->weight = $weight;
    $patientdata->bmi = $bmi;
    $patientdata->bp = $bp;
    $patientdata->o2sat = $o2sat;
    $patientdata->hr = $hr;
    $patientdata->temp = $temp;
    $patientdata->diag = $diag;
    $patientdata->prec = $prec;
    $patientdata->notes = $notes;

    
    $patientdata->save();

    return redirect()->back()->with('message', 'Patient Added Successfully');
}





public function deletePatient($id) //delete patient
    {
        $data=patient::find($id);
        $data->delete();
        

        return redirect()->back();
    }

    public function editPatient($id) //edit patient
    {

        $data=patient::find($id);

        return view('admin.editpatient1', compact('data'));
         
    }
    public function viewPatient($id) 
    {
        
        $data = patient::find($id);
        return view('admin.viewpatient1', compact(('data')));
        // $pdf = PDF::loadView('admin.viewpatient', compact(('data'))); 
        // return $pdf->download('patient.pdf');
    }

    public function generateCert($id) 
    {
        
        $data = patient::find($id);
        return view('admin.generatecert1', compact(('data')));
    }

    

    public function patientUpdate(Request $request, $id)
    {
        $data = patient::find($id);

        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->age=$request->age;
        $data->sex=$request->sex;
        $data->hr=$request->hr;
        $data->o2sat=$request->o2sat;
        $data->temp=$request->temp;
        $data->bmi=$request->bmi;
        $data->weight=$request->weight;
        $data->height=$request->height;
        $data->bday=$request->bday;
        $data->diag=$request->diag;
        $data->prec=$request->prec;
        $data->notes=$request->notes;

        

        
        $data->save();

        return redirect()->back()->with('message', 'Patient Details Updated Successfully');
    }


    public function search(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $nname=$request->get('nname');
            $data = Patient::where('name', 'LIKE', '%'. $nname . '%')->paginate(10);
        }
        return view('admin.intpatient-list1', compact('data')); 
    }

    public function searchArchive(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $nname=$request->get('nname');
            $data = Patient::where('name', 'LIKE', '%'. $nname . '%')->paginate(10);
        }
        return view('admin.archive-int', compact('data')); 
    }

//     public function searchDate(Request $request)
// {
//   if ($request->isMethod('post'))
//   {
//     $date = $request->get('ddate');
//     $period = $request->get('period');

//     // Set the start and end dates based on the selected period
//     switch ($period) {
//       case 'daily':
//         $startDate = Carbon::parse($date)->startOfDay();
//         $endDate = Carbon::parse($date)->endOfDay();
//         break;
//       case 'weekly':
//         $startDate = Carbon::parse($date)->startOfWeek();
//         $endDate = Carbon::parse($date)->addDays(6)->endOfDay();
//         break;
//       case 'monthly':
//         $startDate = Carbon::parse($date)->startOfMonth();
//         $endDate = Carbon::parse($date)->endOfMonth();
//         break;
//       default:
//         $startDate = Carbon::now()->startOfYear();
//         $endDate = Carbon::now()->endOfYear();
//     }

//     // Search for entries in the selected date range
//     $data = Patient::whereBetween('updated_at', [$startDate, $endDate])->paginate(10);
//   }
//   else
//   {
//     $data = Patient::paginate(10);
//   }

//   return view('admin.intpatient-list1', compact('data'));
// }







    

    public function intReport(){
        $tenDaysBefore = now()->subDays(1)->format('Y-m-d');
        $data = Patient::whereBetween('created_at', [$tenDaysBefore, now()])->paginate(5);
        return view('admin.intreport', compact('data'));
    }

   
    
} 
