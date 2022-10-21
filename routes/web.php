<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ModsController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\testHelperController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('test', [testHelperController::class , 'index']);
// mod tester

// Route::get('admin/data/student', 'dataController@showData')->name('student.sTable');
// Route::get('/get-create', 'StudentController@create')->name('student.create');
// Route::post('/std/register', 'StudentController@store')->name('student.store');
// Route::get('/receive/student/email', 'StudentController@receive')->name('student.receive');
// Route::get('/download-data.pdf','StudentController@getDataPDF')->name('student.getDataPDF'); 

// Route::get('/export-student-excel', 'StudentController@exportToExcel')->name('student.getDataEXCEL');
// Route::get('/export-student-CSV', 'StudentController@exportToCsv')->name('student.getDataCSV');


// Route::post('/', 'StudentController@import')->name('import');


// Route::get('/student/{student}', 'StudentController@edit')->name('student.edit');
// Route::delete('/student/{student}', 'StudentController@destroy')->name('student.destroy');
// Route::post('/student/{student}', 'StudentController@update')->name('student.update');


//mainLOGIN
Route::post('student_/register/', 'StudentController@store')->name('student.store'); 
Route::get('/student/registration', 'StudentRegisterController@studRegis')->name('student.cre');    
// Route::get('/', 'StudentController@show')->name('student.show');    

// Route::get('/login', 'adminController@login');  
//endOfMainLogin



//

// Route::get('/', 'dataController@showDataCopy')->name('student.copy');
// Route::get('/', 'StudentController@show');


//create for data 
;

//view CreateMessageDisplay


    Route::get('/', function () {
        return view('welcome');
    });


//main web

// Route::get('/student/registration', 'StudentRegisController@cre')->name('student.cre');

//d


// route::get('/student/registration', 'studRegController@cre')->name('student.cre');



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
// Route::get('/student/home', 'studController@index')->name('student2.index');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/student', 'StudentDashController@index')->name('student')->middleware('student'); 
// Route::get('/shome', [StudentController::class, 'studentAccess'])->name('student2.studentAccess'); 
//admin

// Route::get('/student/home', [StudentController::class, 'index'])->name('student2.index');    

// Route::post('/admin/registers', 'AdController@adminStore')->name('admin.store');

Route::prefix('admin_access')->middleware(['auth','isCheckk'])->group(function()
{
   
    Route::get('/',                      [AdController::class, 'index'])->name('home');
    Route::post('/register',             [AdController::class, 'adminStore'])->name('admin.store');
    Route::get('/data-resources',        [AdController::class, 'showAdmin'])->name('dataResource');
    Route::post('/announcement/posted/', [AdController::class, 'announce'])->name('announcement');






    // Route::get('/index',                [StudentController::class, 'indexMod'])->name('home2');
    // Route::get('/', 'HomeController@index')->name('home');
    // Route::get('/student', 'StudentDashController@index')->name('student')->middleware('student'); 
    Route::get('/get-create',           [StudentController::class, 'create'])->name('student.create');
    Route::post('/import',              [StudentController::class, 'import'])->name('import');
    // Route::get('/show',                 [StudentController::class, 'show'])->name('student.show');
    
    Route::get('/data/student',         [StudentController::class, 'showData'])->name('student.sTable');
    Route::get('/download-data.pdf',    [StudentController::class, 'getDataPDF'])->name('student.getDataPDF');
    Route::get('/export-student-excel', [StudentController::class, 'exportToExcel'])->name('student.getDataEXCEL');
    Route::get('/export-student-CSV',   [StudentController::class, 'exportToCsv'])->name('student.getDataCSV');
    Route::delete('/destroy/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::get('/edit/{student}',       [StudentController::class, 'edit'])->name('student.edit');
    Route::get('/data-announcement',    [StudentController::class, 'showAnnouncement'])->name('admin.announce');
    Route::get('/data-userlogs',        [StudentController::class, 'logs'])->name('logs');
    Route::post('/admin/{student}', 'StudentController@update')->name('student.update'); 

    
    
});     


// studentSIDE
Route::prefix('student_access')->middleware(['auth','checkUser'])->group(function(){
        //tester 
        // Route::get('/',          [StudentController::class, 'main'])->name('mainView');
        
        Route::get('/', 'StudentDashController@index')->name('student');
        Route::get('/home/{student}', 'StudentController@studentAccess')->name('student2.studentAccess'); 
        Route::get('/announcement', 'studController@index2')->name('student2.haha'); 
        // Route::get('/', 'StudentController@show')->name('student.show');    
});