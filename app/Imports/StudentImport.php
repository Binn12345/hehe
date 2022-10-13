<?php

namespace App\Imports;

use App\Students;
use App\User;
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
        return [
            new Students([
                "Fullname" => $row["fullname"],
                "Gender" => $row["gender"],
                "Birthdate" => date("Y-m-d",strtotime($row["birthdate"])),
                "Birthplace" => $row["birthplace"],
                "Contact" => $row["contact"],
                "Email" => $row["email"],
                "Address" => $row["address"],
                "firstname" =>$row['firstname'],
                "middlename" =>$row['middlename'],
                "lastname"   =>$row['lastname'],
            ]),
            User::create([
                'name' => $row["fullname"],
                'email' => $row["email"],
                'password' => bcrypt($row["lastname"]."excel"),
                'username' => '123asas',
                'role'  => 'student',
                
            ])
            ];
        
        

    }
}
