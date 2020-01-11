<?php

namespace App\Exports;

use App\TemplateUserFinger;
use Maatwebsite\Excel\Concerns\FromCollection;

class TemplateFingerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TemplateUserFinger::all();
    }
}
