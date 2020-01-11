<?php

namespace App\Exports;

use App\UserFinger;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserFingerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UserFinger::all();
    }
}
