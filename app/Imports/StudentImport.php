<?php

namespace App\Imports;

use App\Students;
use App\User;
use App\studentModel;
use App\Helpers\Helper; 
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $x = rand();
        $b = "";
        $b = $x;
        $year = date("Y").'A';
        $userID = Helper::IDGenerator(new studentModel, 'student_no', 5, $year);

        return [
            new studentModel([
                'key'  => $b,
                'student_no' => $userID,
                'role' => 'student',
            ]),
            User::create([
                'name' => $row['fullname'], 
                'email' => $row['email'],
                'firstname' =>$row['firstname'],
                'age'        =>$row['age'],
                'middlename' =>$row['middlename'],
                'gender'   => $row['gender'],
                'birthdate' =>  date("Y-m-d",strtotime($row["birthdate"])),
                'birthplace' => $row["birthplace"],
                'username' => $row['username'],
                'lastname' => $row['lastname'],
                'password' => bcrypt($row['username'].$row['lastname']),
                // 'username' => $row['username'],
                'contact'   => $row['contact'],
                'address' => $row['address'],
                'role'  => 'student',
                'key'       => $b,
                // 'firstname'  =>$row['firstname'],
                // 'middlename' =>$row['middlename'],
                
                
            ])
            ];
        
        

    }
}
