<?php

namespace App\Imports;

use App\UserFinger;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImportFinger implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserFinger([
            'pin' => $row[0],
            'nama' => $row[1],
            'pwd' => $row[2],
            'rfid' => $row[3],
            'privilege' => $row[4]
        ]);
    }
}
