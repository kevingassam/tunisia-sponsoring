<?php

namespace App\Exports;

use App\Models\professeurs;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportProfesseurs implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return professeurs::all();
    }
}
