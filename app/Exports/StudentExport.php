<?php

namespace App\Exports;
use App\Students;
use App\User;
use App\studentModel;
use App\StudentExcel;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            

            'Student No.',
            'Fullname',
            'Gender',
            'Address',
            'Age',
            'Birthdate',
            'Birthplace',   
            'Contact',
            'Username',
            'Email',
            'Firstname',
            'Middlename',
            'Lastname',
            
            

           
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(studentModel::getExcelStudents());
        // return StudentExcel::all();
    }
}
