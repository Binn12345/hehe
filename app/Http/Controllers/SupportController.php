<?php

namespace App\Http\Controllers;


use App\Helpers\Helper;
use App\Students;
use App\User;
use App\Admin;
use App\Stud;
use App\studentModel;
use App\userlogs;
use App\announcement;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Excel;
use PDF;     
use Illuminate\Support\Facades\DB;




use Illuminate\Http\Request;

class SupportController extends Controller
{
    //
    public function UpdateStudentAccount(Request $request, User $student)
            {
                $student->update([
                        
                            'name'          =>$request->firstname.' '.$request->middlename.' '.$request->lastname,
                            'firstname'     =>$request->firstname,
                            'middlename'     =>$request->middlename,
                            'lastname'      =>$request->lastname,
                            'gender'        =>$request->gender,
                            'birthdate'     =>$request->dob,
                            'birthplace'    =>$request->bp,
                            'contact'       =>$request->contact,
                            'email'         =>$request->email,
                            'address'       =>$request->address,
                            'password'      =>bcrypt($request->username.$request->lastname),
                            'created_at'    =>now(),
                
                
                            
                        ]);
                
                        // $user->update([
                
                        //     'name'          =>$request->fname,
                        //     'email'         =>$request->email,
                        //     // 'Birthdate'     =>$request->dob,
                        //     // 'Birthplace'    =>$request->bp,
                        //     // 'Contact'       =>$request->contact,
                        //     // 'Email'         =>$request->email,
                        //     // 'Address'       =>$request->address,
                        //     'created_at'    =>now(),
                        // ]);
                        
                
                        $state= "Successfully Data Updated.";
                        userlogs::create([
                
                            'actor'             =>$request->user()->name,
                            'state'             =>$state,
                            'role'              =>$request->user()->role,
                            'created_at'        =>now(),
                            
                        ]); 
                        
                        return redirect()->route('student.sTable')->with('successs', 'Data has been Updated');
            }




            public function chartsView(){

                // GENDER CHART
                $data = DB::table('student')
                ->select(
                    DB::raw('gender as gender'),
                    DB::raw('count(*) as number'))
                ->groupBy('gender')
                ->get();
        
                $array[] = ['Gender', 'Number']; 
        
                foreach($data as $key => $value){
                    $array[++$key] = [$value->gender, $value->number];
                }
        
                // APPLICATION CHART
                $studentApplications = DB::table('student')
                ->select(
                    DB::raw("day(created_at) as day"),
                    DB::raw("count(*) as number"))
                    
                ->groupBy(DB::raw("day(created_at)"),'role')
                ->get();
        
                $result[] = ['Application', 'Number'];
        
                foreach ($studentApplications as $key => $value) {
                $result[++$key] = [$value->day, $value->number];
                }
        
                return view('student.dash.chart')->with('gender', json_encode($array))->with('application',json_encode($result));
            }

}
