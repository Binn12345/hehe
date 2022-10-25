<?php

namespace App\Exports;
use App\Students;
use App\User;
use App\StudentExcel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            
            'fullname',
            'gender',
            'role',
           
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Students::getStudentExcel());
        // return StudentExcel::all();
    }
}
