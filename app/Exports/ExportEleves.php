<?php

namespace App\Exports;

use App\Models\Eleves;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportEleves implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $eleve;

    public function __construct($eleve)
    {
        $this->eleve = $eleve;
    }

    public function collection()
    {
        return collect($this->eleve);
    }

    public function headings(): array
    {
        return [
            'Nom',
            'Prénom' ,
            'Niveau' ,
            'Téléphone',
            'email',
            'adresse',
            'type de cour',
            'prenom parent',
            'Téléphone parent',
        ];
    }

}
