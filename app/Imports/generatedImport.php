<?php

namespace App\Imports;

use App\Models\generated_certs;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class generatedImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $request = request()->all();

        return new generated_certs([
            "seminar_id" => $request['seminar'],
            "firstname" => $row['firstname'],
            "validation_code" => Hash::make('validation_code'),
            "lastname" => $row['lastname'],
            "cert_detail" => $row['cert_detail'],
            "date_generated" => Carbon::now(),
            "email" => $row['email'],
        ]);
    }
}
