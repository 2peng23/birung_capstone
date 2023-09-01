<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Obpatient;
use PDF;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;



 
class ObPatientController extends Controller
{
    

    // public function indexOb(){
    //     $data2 = Obpatient::get();
    //     return view('admin.obpatient-list', compact ('data2'));
    // }
    public function indexOb(Request $request) {
        // $data2 = DB::table('obpatients')->paginate(5);
        // return view('admin.obpatient-list1', ['data2' => $data2]);

        $pageSize = $request->input('pagesize', 10); // default to 10 if not provided
        $data2 = DB::table('obpatients')
                    ->where('updated_at', '>=', now()->subWeek())
                    // ->where('updated_at', '>=', now()->subYear()) //Year
                    ->paginate($pageSize);
        return view('admin.obpatient-list1', compact('data2'));
    }
    public function archiveObpatient(Request $request) 
    {
        $pageSize = $request->input('pagesize', 10);
        $oneWeekAgo = now()->subWeek(); // get the timestamp for 1 week ago
        $data2 = DB::table('obpatients')
            ->where('updated_at', '<', $oneWeekAgo)
            ->paginate($pageSize);
        return view('admin.archive-ob', compact('data2'));
    }
    
    

   

public function addObPatient()
{

    return view('admin.add-ob-patient1');
}


public function saveObPatient(Request $request)
{
    
    $name2 = $request->name2;
    $email2 = $request->email2;
    $age2 = $request->age2;
    $sex2 = $request->sex2;
    $address2 = $request->address2;
    $bday2 = $request->bday2;
    $phone2 = $request->phone2;
    $height2 = $request->height2;
    $weight2 = $request->weight2;
    $bmi2 = $request->bmi2;
    $bp2 = $request->bp2;
    $o2sat2 = $request->o2sat2;
    $hr2 = $request->hr2;
    $temp2 = $request->temp2;
    $diag2 = $request->diag2;
    $prec2 = $request->prec2;
    $notes2 = $request->notes2;
    

    $patientdata2 = new Obpatient();
    $patientdata2->name2 = $name2;
    $patientdata2->email2 = $email2;
    $patientdata2->age2 = $age2;
    $patientdata2->sex2 = $sex2;
    $patientdata2->address2 = $address2;
    $patientdata2->bday2 = $bday2;
    $patientdata2->phone2 = $phone2;
    $patientdata2->height2 = $height2;
    $patientdata2->weight2 = $weight2;
    $patientdata2->bmi2 = $bmi2;
    $patientdata2->bp2 = $bp2;
    $patientdata2->o2sat2 = $o2sat2;
    $patientdata2->hr2 = $hr2;
    $patientdata2->temp2 = $temp2;
    $patientdata2->diag2 = $diag2;
    $patientdata2->prec2= $prec2;
    $patientdata2->notes2 = $notes2;
    $patientdata2->save();

    return redirect()->back()->with('message', 'Patient Added Successfully');
}



public function deleteObPatient($id) //delete patient
    {
        $data2=obpatient::find($id);
        $data2->delete();
        

        return redirect()->back();
    }

    public function editObPatient($id) //edit patient
    {

        $data2=obpatient::find($id);

        return view('admin.editobpatient1', compact('data2'));
        
    }
    public function viewObPatient($id) 
    {
        
        $data2 = obpatient::find($id);
        return view('admin.viewobpatient1', compact(('data2')));
        // $pdf = PDF::loadView('admin.viewpatient', compact(('data'))); 
        // return $pdf->download('patient.pdf');
    }

    public function generateObCert($id) 
    {
        
        $data2 = obpatient::find($id);
        return view('admin.generateobcert1', compact(('data2')));

        // $pdf = PDF::loadView('admin.generateobcert', compact('data2'));
        // return $pdf->download($data2->name2 . '.pdf');
    }

    public function dlObPatient($id) 
    {
        
        $data2 = obpatient::find($id);
        // return view('admin.dlobpatient', compact(('data2')));
        $pdf = PDF::loadView('admin.dlobpatient', compact('data2'));
        return $pdf->download($data2->name2 . '.pdf');
    }

    public function patientObUpdate(Request $request, $id)
    {
        $data2 = obpatient::find($id);

        $data2->name2=$request->name2;
        $data2->phone2=$request->phone2;
        $data2->email2=$request->email2;
        $data2->address2=$request->address2;
        $data2->age2=$request->age2;
        $data2->sex2=$request->sex2;
        $data2->hr2=$request->hr2;
        $data2->o2sat2=$request->o2sat;
        $data2->temp2=$request->temp22;
        $data2->bmi2=$request->bmi2;
        $data2->weight2=$request->weight2;
        $data2->height2=$request->height2;
        $data2->bday2=$request->bday2;
        $data2->diag2=$request->diag2;
        $data2->prec2=$request->prec2;
        $data2->notes2=$request->notes2;

        

        
        $data2->save();

        return redirect()->back()->with('message', 'Patient Details Updated Successfully');
    }


    public function search(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $nname=$request->get('nname');
            $data2 = Obpatient::where('name2', 'LIKE', '%'. $nname . '%')->paginate(10);
        }
        return view('admin.obpatient-list1', compact('data2')); 
    }

    public function searchArchive(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $nname=$request->get('nname');
            $data2 = Obpatient::where('name2', 'LIKE', '%'. $nname . '%')->paginate(10);
        }
        return view('admin.archive-ob', compact('data2')); 
    }

    public function searchObDate(Request $request)
{
  if ($request->isMethod('post'))
  {
    $date = $request->get('ddate');
    $period = $request->get('period');

    // Set the start and end dates based on the selected period
    switch ($period) {
      case 'daily':
        $startDate = Carbon::parse($date)->startOfDay();
        $endDate = Carbon::parse($date)->endOfDay();
        break;
      case 'weekly':
        $startDate = Carbon::parse($date)->startOfWeek();
        $endDate = Carbon::parse($date)->addDays(6)->endOfDay();
        break;
      case 'monthly':
        $startDate = Carbon::parse($date)->startOfMonth();
        $endDate = Carbon::parse($date)->endOfMonth();
        break;
      default:
        $startDate = Carbon::now()->startOfYear();
        $endDate = Carbon::now()->endOfYear();
    }

    // Search for entries in the selected date range
    $data2 = Obpatient::whereBetween('updated_at', [$startDate, $endDate])->paginate(10);
  }
  else
  {
    $data2 = Obpatient::paginate(10);
  }

  return view('admin.obpatient-list', compact('data2'));
}

    public function obReport(){
        $tenDaysBefore = now()->subDays(1)->format('Y-m-d');
        $data2 = Obpatient::whereBetween('created_at', [$tenDaysBefore, now()])->paginate(5);
        return view('admin.obreport', compact('data2'));
    }

    
   
    
} 
