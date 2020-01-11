<?php

namespace App\Imports;

use App\TemplateUserFinger;
use Maatwebsite\Excel\Concerns\ToModel;

class TemplateImportFinger implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TemplateUserFinger([
            'pin' => $row[0],
            'finger_idx' => $row[1],
            'alg_ver' => $row[2],
            'template' => $row[3]
        ]);
    }
}
