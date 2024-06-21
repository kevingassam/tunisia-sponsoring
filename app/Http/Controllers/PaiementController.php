<?php

namespace App\Http\Controllers;

use App\Models\eleves;
use App\Models\paiements;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaiementController extends Controller
{
    public function index(Request $request)
    {
        $id_eleve = $request->input('id_eleve' ?? null);
        $eleve = eleves::where('id', $id_eleve)
            ->where('id_user', Auth::id())
            ->first();
        return view('admin.paiements.index')
            ->with("eleve", $eleve ?? null)
            ->with("id_eleve", $id_eleve)
        ;
    }

    public function print($id)
    {
        $paiement = paiements::findOrFail($id);
        $eleve = $paiement->eleve;
        // Générer le PDF
        $pdf = Pdf::loadView('pdf.facture1', compact('paiement', 'eleve'));

        // Télécharger le PDF
        return $pdf->download("FACTURE MC CARRE " . $paiement->id . ".pdf");
    }

    public function print_eleve($id_eleve){
        $eleve = eleves::where('id',$id_eleve)->where('id_user',Auth::id())->first();
        if($eleve){
            $pdf = Pdf::loadView('pdf.releve', compact('eleve'));
            return $pdf->download( $eleve->nom . ".pdf");
        }
    }
}
