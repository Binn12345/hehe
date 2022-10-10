<?php

namespace App\Exports;
use App\Students;
use App\StudentExcel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            "id",
            'fullname',
            'gender',
            'birthdate',
            'birthplace',
            'contact',
            'email',
            'address'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Students::getStudents());
        // return StudentExcel::all();
    }
}
