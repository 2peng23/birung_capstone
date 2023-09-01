<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PatientController;

use App\Http\Controllers\ObPatientController;

use Illuminate\Http\Request;

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



Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::group(['middleware' => 'adminonly'], function () {
        Route::get('/add_doctor_view', [AdminController::class, 'addview']);

        Route::get('/add_staff_view', [AdminController::class, 'addStaff']);

        Route::post('/upload_doctor', [AdminController::class, 'upload']);

        Route::post('/upload_staff', [AdminController::class, 'uploadSTaff']);
        Route::get('/showappointment', [AdminController::class, 'showappointment']);

        Route::get('/approve/{id}', [AdminController::class, 'approve']);

        Route::get('/cancel/{id}', [AdminController::class, 'cancel']);

        Route::get('/deleteapp/{id}', [AdminController::class, 'deleteapp']);

        Route::get('/showdoctor', [AdminController::class, 'showdoctor']);

        Route::get('/staff', [AdminController::class, 'showStaff']);

        Route::get('/editdoctor/{id}', [AdminController::class, 'editdoctor']);

        Route::get('/editstaff/{id}', [AdminController::class, 'editStaff']);

        Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

        Route::get('/deletestaff/{id}', [AdminController::class, 'deleteStaff']);

        Route::post('/doctorupdate/{id}', [AdminController::class, 'doctorupdate']);

        Route::post('/staffupdate/{id}', [AdminController::class, 'staffUpdate']);

        Route::get('/sendmail/{id}', [AdminController::class, 'sendmail']);

        Route::post('/sendemail/{id}', [AdminController::class, 'sendemail']);

        Route::get('/reports', [AdminController::class, 'week_reports']);

        Route::get('/int_report', [AdminController::class, 'int_report']);

        Route::get('/ob_report', [AdminController::class, 'ob_report']);

        Route::get('/app_report', [AdminController::class, 'app_report']);

        Route::get('/search', [AdminController::class, 'search']);

        Route::match(['get', 'post'], '/emergency', [AdminController::class, 'emergency']);

        Route::post('/add_emergency', [AdminController::class, 'add_emergency']);

        Route::get('/delete-emergency/{id}', [AdminController::class, 'deleteEmergency']);




        Route::any('/search-date', 'App\Http\Controllers\AdminController@searchDate');



        Route::get('/intpatient-list', [PatientController::class, 'indexInt']);

        Route::get('/archive-patient', [PatientController::class, 'archivePatient']);

        Route::get('/int-report', [PatientController::class, 'intReport']);

        Route::get('/obpatient-list', [PatientController::class, 'indexOb']);

        Route::get('/add-patient', [PatientController::class, 'addIntPatient']);

        Route::get('/add-ob-patient', [PatientController::class, 'addObPatient']);

        Route::post('/save-patient', [PatientController::class, 'savePatient']);

        Route::post('/save-ob-patient', [PatientController::class, 'saveObPatient']);

        Route::get('/deletepatient/{id}', [PatientController::class, 'deletePatient']);

        Route::get('/editpatient/{id}', [PatientController::class, 'editPatient']);

        Route::get('/viewpatient/{id}', [PatientController::class, 'viewPatient']);

        Route::get('/generatecert/{id}', [PatientController::class, 'generateCert']);

        Route::get('/dlpatient/{id}', [PatientController::class, 'dlPatient']);

        Route::post('/patientupdate/{id}', [PatientController::class, 'patientUpdate']);

        Route::post('/search-record', 'App\Http\Controllers\PatientController@search');

        Route::post('/search-record-archive', 'App\Http\Controllers\PatientController@searchArchive');




        Route::get('/obpatient-list', [ObPatientController::class, 'indexOb']);

        Route::get('/archive-obpatient', [ObPatientController::class, 'archiveObpatient']);

        Route::get('/ob-report', [ObPatientController::class, 'obReport']);

        Route::get('/add-ob-patient', [ObPatientController::class, 'addObPatient']);

        Route::post('/save-ob-patient', [ObPatientController::class, 'saveObPatient']);

        Route::get('/deleteobpatient/{id}', [ObPatientController::class, 'deleteObPatient']);

        Route::get('/editobpatient/{id}', [ObPatientController::class, 'editObPatient']);

        Route::get('/viewobpatient/{id}', [ObPatientController::class, 'viewObPatient']);

        Route::get('/generateobcert/{id}', [ObPatientController::class, 'generateObCert']);

        Route::get('/dlobpatient/{id}', [ObPatientController::class, 'dlObPatient']);

        Route::post('/patientobupdate/{id}', [ObPatientController::class, 'patientObUpdate']);

        Route::post('/search-ob-record', 'App\Http\Controllers\ObPatientController@search');

        Route::post('/search-ob-record-archive', 'App\Http\Controllers\ObPatientController@searchArchive');

        Route::post('/search-obreport-record', 'App\Http\Controllers\ObPatientController@searchObReport');

        Route::any('/search-ob-date', 'App\Http\Controllers\ObpatientController@searchObDate');
    });

    Route::group(['middleware' => 'useronly'], function () {
        Route::post('/appointment', [HomeController::class, 'appointment']);

        Route::get('/myappointment', [HomeController::class, 'myappointment']);

        Route::get('/createappointment/{id}', [HomeController::class, 'createApp']);

        Route::post('/add_feedback', [HomeController::class, 'add_feedback']);

        Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);
    });
});
