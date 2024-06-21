<?php

namespace App\Exports;

use App\Models\paiements;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportPaiements implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $paiements;

    public function __construct($paiements)
    {
        $this->paiements = $paiements;
    }

    public function collection()
    {
        return collect($this->paiements);
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nom de l\'élève',
            'Mois',
            'Date de paiement',
            'Date de création'
        ];
    }
}
