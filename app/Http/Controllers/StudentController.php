<?php

namespace App\Http\Controllers;
use App\Students;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Excel;
use PDF;     

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function index2()
    // {
    //     $students = Students::all();
    //     return redirect()->with('students',$students);
    // }
    //Export to EXCEL
    public function exportToExcel()
    {   
        return Excel::download(new StudentExport,'Students.xlsx');
    }
    //Import to EXCEL
    public function import(Request $request)
    {
        Excel::import(new StudentImport, $request->file);
        return redirect('/');
    }
    //Export to CSV
    public function exportToCsv()
    {
        return Excel::download(new StudentExport,'Students.csv');
    }
    //export To PDF
    public function getDataPDF()
    {
        $students = Students::all();
        $pdf = PDF::loadView('index3', compact('students'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('student-data.pdf');
    }
    public function getAllStudent()
    {
        $students = Students::all();
        return view('index2', compact('students','students'));
    }
    public function show(){
        $students = Students::all();
        return view('index2', compact('students','students'));
    }
    // public function showData()
    // {
    //     $students = Students::all();
    //     return view('dTable', compact('students','students'));
    // }
    public function create()
    {
        return view('create');
    }
    public function destroy(Students $student)
    {
        $student->delete();
        return redirect()->route('student.show')->with('success', 'Data has been deleted');
    }
    
    public function edit(Students $student)
    {
        return view('edit')->with('student',$student);
    }
    public function update(Request $request, Students $student)
    {
        $student->update([

            'Fullname'      =>$request->fname,
            'Gender'        =>$request->gender,
            'Birthdate'     =>$request->dob,
            'Birthplace'    =>$request->bp,
            'Contact'       =>$request->contact,
            'Email'         =>$request->email,
            'Address'       =>$request->address,
            'created_at'    =>now(),
        ]);

        return redirect()->route('student.show')->with('success', 'Data has been Updated');
    }
    //CREATE DATA 
    public function store(Request $request)
    {

        Students::create([

            'Fullname'      =>$request->fname,
            'firstname'     =>$
            'middlename'
            'lastname'
            'username'
            'password'
            'Gender'        =>$request->gender,
            'Birthdate'     =>$request->dob,
            'Birthplace'    =>$request->bp,
            'Contact'       =>$request->contact,
            'Email'         =>$request->email,
            'Address'       =>$request->address,
            'created_at'    =>now(),
        ]);

        return redirect()->route('student.show')->with('success', 'Data has been added');
    }


}
