<?php
use App\Http\Controllers\StudentController;
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
Route::get('/student/registration', 'StudentRegisterController@studRegis')->name('student.cre');    
Route::get('/', 'StudentController@show')->name('student.show');    

// Route::get('/login', 'adminController@login');  
//endOfMainLogin



//

// Route::get('/', 'dataController@showDataCopy')->name('student.copy');
// Route::get('/', 'StudentController@show');


//create for data 
;

//view CreateMessageDisplay


// Route::get('/login', function () {
//       return view('welcome');
// });


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//admin


Route::prefix('admin')->middleware(['auth','isUser'])->group(function()
{
    Route::get('/get-create',           [StudentController::class, 'create'])->name('student.create');
    Route::post('/import',              [StudentController::class, 'import'])->name('import');
    // Route::get('/show',                 [StudentController::class, 'show'])->name('student.show');
    Route::post('/register',            [StudentController::class, 'adminStore'])->name('admin.store');
    Route::get('/data-resources',       [StudentController::class, 'adminData'])->name('dataResource');
    Route::get('/data/student',         [StudentController::class, 'showData'])->name('student.sTable');
    Route::get('/download-data.pdf',    [StudentController::class, 'getDataPDF'])->name('student.getDataPDF');
    Route::get('/export-student-excel', [StudentController::class, 'exportToExcel'])->name('student.getDataEXCEL');
    Route::get('/export-student-CSV',   [StudentController::class, 'exportToCsv'])->name('student.getDataCSV');
    Route::delete('/destroy/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::get('/edit/{student}',       [StudentController::class, 'edit'])->name('student.edit');
    Route::get('/data-announcement',    [StudentController::class, 'showAnnouncement'])->name('admin.announce');
    Route::get('/data-userlogs',        [StudentController::class, 'logs'])->name('logs');


    

   


    Route::post('/admin/{student}', 'StudentController@update')->name('student.update'); 

    //Announcement
    Route::post('/announcement/posted/', [StudentController::class, 'announce'])->name('announcement');






    //bug
   
    Route::post('/registesr', 'StudentController@store')->name('student.store'); 
});     


//studentSIDE
Route::prefix('student')->middleware('auth','isCheck')->group(function(){

        Route::get('/home', 'studController@index')->name('student2.index');
        Route::get('/student/announcement', 'studController@index2')->name('student2.haha'); 

});