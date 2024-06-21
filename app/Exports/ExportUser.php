<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUser implements FromCollection
{
    protected $eleve;

    public function __construct($eleve)
    {
        $this->eleve = $eleve;
    }

    public function collection()
    {
        return collect($this->eleve);
    }


    
}
