<?php

namespace App\Http\Controllers;
use App\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function index2()
    // {
    //     $students = Students::all();
    //     return redirect()->with('students',$students);
    // }

    public function show(){
        $students = Students::all();
        return view('index2', compact('students','students'));
    }
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
    public function store(Request $request)
    {

        Students::create([

            'Fullname'      =>$request->fname,
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
