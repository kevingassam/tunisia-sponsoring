<?php

namespace App\Exports;

use App\Models\depenses;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportDepenses implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return depenses::all();
    }
}
