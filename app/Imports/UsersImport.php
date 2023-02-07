<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $date = Carbon::now();

        return new User([
            "firstname" => $row['firstname'],
            "validation_code" => Hash::make('validation_code'),
            "lastname" => $row['firstname'],
            'cert_detail' => $row['cert_detail'],
            "date_generated" => Carbon::now(),
            "seminar_id" => $row['seminar_id'],
            "email" => $row['email'],
        ]);
    }
}
