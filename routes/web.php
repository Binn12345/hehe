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
            Auth::routes();
            // Route::get('test', [testHelperController::class , 'index']);
            Route::post('student_/register/', 'StudentController@store')->name('student.store'); 
            Route::get('/student/registration', 'StudentRegisterController@studRegis')->name('student.cre');  
            
            
            Route::get('/', 'bugController@bug')->name('bug');
            


            
            Route::get('test', [testHelperController::class , 'index']);  
            
            //adminSIDE
            Route::prefix('admin')->middleware(['auth','isCheckk'])->group(function()
            {
                
                Route::get('/',                      [AdController::class, 'index'])            ->name('home');
                Route::post('/registers',            [AdController::class, 'adminStore'])       ->name('admin.store');
                Route::get('/data-resources',        [AdController::class, 'showAdmin'])        ->name('dataResource');
                Route::post('/announcement/posted/', [AdController::class, 'announce'])         ->name('announcement');
                Route::get('/register/account/',     [AdController::class, 'StdAcct'])          ->name('stdReg');
                Route::get('/data/student',          [AdController::class, 'showStudent'])       ->name('student.sTable');


                // Route::get('/edit/admin/{admin}',          [AdController::class, 'editAdmin'])        ->name('admin.edit');


                

                Route::post('/store',               [AdController::class, 'studStore'])          ->name('student.studStore');

                //student
                Route::post('/update/{student}',            [AdController::class, 'updatee'])               ->name('studentt.update'); 
                Route::get('/edit/{student}',               [AdController::class, 'edit'])                  ->name('student.edit');
                Route::get('/student-profile/{student}',    [AdController::class, 'viewProfile'])           ->name('view.profile');
                Route::get('/download-data.pdf',            [AdController::class, 'getDataPDF'])            ->name('student.getDataPDF');
                Route::get('/export-student-excel',         [StudentController::class, 'exportToExcel'])    ->name('student.getDataEXCEL');


                
                Route::get('/get-create',           [StudentController::class, 'create'])           ->name('student.create');
                Route::POST('/import',              [AdController::class, 'import'])                ->name('imports');
                
                
                
                Route::get('/export-student-CSV',   [StudentController::class, 'exportToCsv'])      ->name('student.getDataCSV');
                // Route::delete('/destroy/{student}', [StudentController::class, 'destroy'])          ->name('student.destroy');
                


                Route::get('/data-announcement',    [AdController::class, 'showAnnouncement'])      ->name('admin.announce');
                Route::get('/data-userlogs',        [StudentController::class, 'logs'])             ->name('logs');
                Route::post('/admin/{student}',     [StudentController::class, 'update'])           ->name('student.update'); 

                

                //  Route::get('/data/student',         [StudentController::class, 'showData'])         ->name('student.sTable');  
                



                // admin edit delete account
                Route::get('/support/edit/{admin}',        [AdController::class, 'editAdmin'])                      ->name('admin.edit');
                Route::DELETE('/destroy/{admin}',          [AdController::class, 'destroy'])                        ->name('admin.DestroyAdminAccount');
                Route::POST('/update/{admin}',             [AdController::class, 'UpdateAdminAccount'])             ->name('admin.EditAdminAccount');
                




                //  announcement deleted
                Route::DELETE ('/data-announcement/{announcement}',              [AdController::class, 'destroyAnnouncement'])     ->name('announcement.destroy');
                Route::GET    ('/data-announcement/edit/{announcement}',         [AdController::class, 'editAnnouncement'   ])     ->name('announcement.edit');
                Route::put    ('/data-announcement/{announcement}',              [AdController::class, 'updateAnnouncement' ])      ->name('announcement.update');
                
                





                // ADMIN DESTROY,EDIT, VIEW STUDENT ACCOUNT
                Route::DELETE ('/{student}',           [AdController::class, 'destroyStudent'])   ->name('DestroyStud');

                //chart
                Route::get('/dashboard/web-support/',                  [AdController::class, 'supportChart'])                       ->name('dash.chart');

            });     


            // studentSIDE
            Route::prefix('student')->middleware(['auth','checkUser'])->group(function()
            {
                    
                    
                    Route::get('/',                 [ModsController::class, 'index'])           ->name('student');
                    Route::get('/announcements',    [ModsController::class, 'announceByAdm'])   ->name('announcements');
                    Route::get('/student-profile',  [ModsController::class, 'stdProfile'])      ->name('stdProfile');


                    // Student Acitvity && Newsfeed && Fair
                    Route::get('/access/modules/',                [ModsController::class, 'modules'])         ->name('modules');
                    Route::get('/web/home/',                      [ModsController::class, 'newsfeed'])        ->name('newsfeed');   
                    Route::get('/web/read-only',    [ModsController::class, 'fairWarning'])     ->name('fairWarning');


                    //EDIT PROFILE  
                    // Route::PUT('/update',           [ModsController::class, 'updateProfile'])      ->name('stdProfile.update');
                    Route::put('/update/{id}',           [ModsController::class, 'updateProfilePic'])      ->name('changeProfileImage');

            });










































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

// Route::get('/', 'StudentController@show')->name('student.show');    

// Route::get('/login', 'adminController@login');  
//endOfMainLogin



//

// Route::get('/', 'dataController@showDataCopy')->name('student.copy');
// Route::get('/', 'StudentController@show');


//create for data 


//view CreateMessageDisplay




//main web

// Route::get('/student/registration', 'StudentRegisController@cre')->name('student.cre');

//d
 // Route::get('/show',                 [StudentController::class, 'show'])->name('student.show');
    // Route::get('/index',                [StudentController::class, 'indexMod'])->name('home2');__
    // Route::get('/', 'HomeController@index')->name('home');
    // Route::get('/student', 'StudentDashController@index')->name('student')->middleware('student'); 

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

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/student', 'StudentDashController@index')->name('student')->middleware('student'); 
// Route::get('/shome', [StudentController::class, 'studentAccess'])->name('student2.studentAccess'); 
//admin

// Route::get('/student/home', [StudentController::class, 'index'])->name('student2.index');    

// Route::post('/admin/registers', 'AdController@adminStore')->name('admin.store');




