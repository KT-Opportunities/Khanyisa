<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Individual;
use App\Status;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
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

// header("Cache-Control: no-cache, must-revalidate");
//     header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
//     header('Access-Control-Allow-Origin:  *');
//     header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
//     header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Auth\LoginController@index');
Route::post('checklogin', 'Auth\LoginController@checklogin');
Route::get('successlogin', 'Auth\LoginController@successlogin');
Route::get('logout', 'Auth\LoginController@logout');

Route::post('create', 'IndividualController@create');

Route::get('/home', function () {

    $petani = DB::select('select * from individuals where NewLead = :id', ['id' => "Yes"]);

    return view('home', ['petani' => $petani]);
});





Route::get('/welcome', function () {
    return view('/welcome');
})->name('welcome');


Route::get('/individual', function () {
    return view('/individual');
})->name('individual');

Route::get('/newleads', function () {
    return view('/newleads');
})->name('newleads');

Route::get('/contacts', function () {
    return view('/contacts');
})->name('contacts');

Route::get('/reportGen', function () {
    return view('/reportGen');
})->name('reportGen');



Route::get('contactsview/{id}', 'ContactsController@contactsview')->name('contactsview');
Route::get('deleteSS/{id}', 'ContactsController@deleteSS')->name('delete');
Route::get('deleteA/{id}', 'ContactsController@deleteA')->name('delete');
Route::get('deleteR/{id}', 'ContactsController@deleteR')->name('delete');
Route::get('deleteST/{id}', 'ContactsController@deleteST')->name('delete');

Route::resource('individual', 'IndividualController');
Route::resource('contacts', 'ContactsController');

Route::get('edit/{id}', 'IndividualController@edit')->name('edit');
Route::get('newleads', 'IndividualController@newleads')->name('newleads');

Route::get('policy/{id}', 'IndividualController@policy')->name('policy');
Route::post('update/{id}', 'IndividualController@update');
Route::post('editsteward/{id}','ContactsController@editsteward');
Route::post('newsteward', 'ContactsController@newsteward');
Route::post('newagent', 'ContactsController@newagent');
Route::post('newregion', 'ContactsController@newregion');
Route::post('newstation', 'ContactsController@newstation');

Route::post('process', function (Request $request) {
    $file = $request->file('doc');
    $path = $request->file('doc')->getClientOriginalName();
    $id = $request->get('Indi_id');
    if( $request->hasFile('doc') ) {
        $indi = Individual::where('id', $id)->first();
        $indi->SignedDoc = $path;
        
        // $request->file('doc')->move(public_path('uploads') . $path);
        // $request->file('doc')->store('uploads');
        // $destination = base_path() . '/public/uploads';
        // $request->file('doc')->move($destination,$path);
        $file->storeAs('uploads', $path);
        $indi->save();
    }

    

    return redirect()->back()->with('success', 'File uploaded successfully.');
    // dd($path. $id);
});

Route::post('status', function (Request $request) {
    date_default_timezone_set('Africa/Johannesburg');//or choose your location
       $d =  date('l F Y g:i:s ');

    //    $da = Carbon::now()->addMonths(2);
    //    $dt = $request->get('datee');
    //    $ds = Carbon::createFromDate($dt)->addMonths(6);
    // //    dd($ds);
       
    // $de = Str::limit($ds, 10,);
    // $replaced = Str::replaceFirst('...', '', $de);
    // dd($replaced);
    // dd(date('j-F-Y H:i:s'));
    $id = $request->get('Indi_id');
    $indi = Individual::where('MainIDNumber', $id)->first();
 
    if ($request->get('Status') == "Pending" || $request->get('Status') == "Client Consent" || $request->get('Status') == "Insurer Quote" || $request->get('Status') == "Open") {
        $lead = "Yes";
    }else{
        $lead = "No";
    }
    $indi->NewLead = $lead;
    $indi->Status = $request->get('Status');
        $indi->save();

        $stat = new Status([

            'indi_id' => $id ,
            'status' => $request->get('Status'),
            'changed_by' => auth()->user()->name,
            'comments' => $request->get('StatusComment'),
            'date' => $d,
            ]);
    
            $stat->save();
            
        
    

    

    return redirect()->back()->with('success', 'Status updated successfully.');
    // dd($path. $id);
});

Route::get('/download/{file}', 'IndividualController@download');
Route::get('/downloadPDF/{id}','IndividualController@downloadPDF');

Route::get('/reportGen', function () {
    return view('/reportGen');
})->name('reportGen');
Route::get('/reports', function () {
    return view('/reports');
})->name('reports');
Route::get('reportGen/{id}', 'IndividualController@reportGen')->name('reportGen');
Route::get('reports', 'IndividualController@reports')->name('reports');
Route::get('/import','IndividualController@importFile');
Route::post('/import','IndividualController@importExcel');

Route::get('/search', 'SearchController@index');
