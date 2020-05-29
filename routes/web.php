<?php

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

header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header('Access-Control-Allow-Origin:  *');
    header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

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
Route::get('/reports', function () {
    return view('/reports');
})->name('reports');
Route::get('/search', function () {
    return view('/search');
})->name('search');

Route::resource('individual', 'IndividualController');

Route::get('edit/{id}', 'IndividualController@edit')->name('edit');
Route::get('reportGen', 'IndividualController@reportGen')->name('reportGen');

Route::get('policy/{id}', 'IndividualController@policy')->name('policy');
Route::post('update/{id}', 'IndividualController@update');
Route::get('newleads', 'IndividualController@newleads')->name('newleads');
Route::get('reports', 'IndividualController@reports')->name('reports');
Route::post('/downloadPDF2','IndividualController@downloadPDF2');
Route::post('/downloadPDF3','IndividualController@downloadPDF3');
Route::get('/pdf2','IndividualController@pdf2');

Route::post('editsteward/{id}','ContactsController@editsteward');
Route::post('newsteward', 'ContactsController@newsteward');
Route::post('newagent', 'ContactsController@newagent');
Route::post('newregion', 'ContactsController@newregion');
Route::post('newstation', 'ContactsController@newstation');
Route::resource('contacts', 'ContactsController');
Route::get('contactsview/{id}', 'ContactsController@contactsview')->name('contactsview');
Route::get('delete/{id}', 'ContactsController@delete')->name('delete');