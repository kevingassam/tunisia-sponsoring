<?php

namespace App\Http\Controllers;

use App\Exports\ExportDepenses;
use App\Exports\ExportEleves;
use App\Exports\ExportPaiements;
use App\Exports\ExportProfesseurs;
use App\Models\eleves;
use App\Models\paiements;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExport extends Controller
{
    public function export_eleves()
    {
        $eleves = $this->prepareElevesData();
        return Excel::download(new ExportEleves($eleves), 'eleves.xlsx');
    }

    public function export_professeurs()
    {
        return Excel::download(new ExportProfesseurs, 'professeurs.xlsx');
    }

    public function export_paiements()
    {
        $paiements = $this->preparePaiementsData();
        return Excel::download(new ExportPaiements($paiements), 'paiements.xlsx');
    }

    public function export_depenses()
    {
        return Excel::download(new ExportDepenses, 'depenses.xlsx');
    }


    private function preparePaiementsData()
    {
        return paiements::with('eleve')->get()->map(function($paiement) {
            return [
                'ID' => $paiement->id,
                'Nom de l\'élève' => $paiement->eleve ? $paiement->eleve->nom : 'N/A',
                'Mois' => $paiement->mois,
                'Date de paiement' => $paiement->date_paiement,
                'Date de création' => $paiement->created_at->format('Y-m-d'),
            ];
        });
    }



    private function prepareElevesData()
    {
        return eleves::get()->map(function($eleve) {
            return [
                'Nom' => $eleve->nom,
                'Prénom' => $eleve->prenom ?? "",
                'Niveau' => $eleve->niveau,
                'Téléphone' => $eleve->telephone,
                'email' => $eleve->email,
                'adresse' => $eleve->adresse,
                'type de cour' => $eleve->type_cour,
                'prenom parent' => $eleve->prenom_parent,
                'Téléphone parent' => $eleve->telephone_parent,
            ];
        });
    }


}
