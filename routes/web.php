<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index2');
// });
Route::get('/data/student', 'dataController@showData')->name('student.sTable');
// Route::get('/', 'dataController@showDataCopy')->name('student.copy');
Route::get('/', 'StudentController@show');
Route::get('/student', 'StudentController@create')->name('student.create');
Route::post('/student', 'StudentController@store')->name('student.store');
Route::get('/download-data.pdf','StudentController@getDataPDF')->name('student.getDataPDF');

// Route::get('/login', function () {
//       return view('welcome');
// });
Route::get('/export-student-excel', 'StudentController@exportToExcel')->name('student.getDataEXCEL');
Route::get('/export-student-CSV', 'StudentController@exportToCsv')->name('student.getDataCSV');


Route::post('/', 'StudentController@import')->name('import');


Route::get('/student/{student}', 'StudentController@edit')->name('student.edit');
Route::delete('/student/{student}', 'StudentController@destroy')->name('student.destroy');
Route::post('/student/{student}', 'StudentController@update')->name('student.update');


Route::get('/', 'StudentController@show')->name('student.show');



Route::get('/login', 'adminController@login');  

// Route::get('login', function () {
//     return view('welcome2');
// });

// Route::get('/sample', "sampleController@index" );
// Route::get('/data', "userController@users");

// Route::get('/register', "sampleRegistration@register");

// Route::resource('users','app/http/Controllers/userController');

// Route::get('/test', function () {
//     return 'hahahah';
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
