<?php

namespace App\Http\Controllers;

use App\Models\depenses;
use App\Models\eleves;
use App\Models\paiements;
use App\Models\professeurs;
use App\Models\programmes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.index');
    }

    public function gerer_programmes()
    {
        return view('admin.programmes.index');
    }

    public function profile()
    {
        return view('admin.profile.index');
    }

    public function finnaces(Request $request)
    {

        $currentYear = $request->input("date") ?? date('Y');
        $user = Auth::user();
        $eleves = eleves::whereYear('created_at', $currentYear)
            ->where('id_user', $user->id)
            ->get();
        $professeurs = professeurs::whereYear('created_at', $currentYear)
            ->where('id_user', $user->id)
            ->get();
        $depenses = depenses::whereYear('created_at', $currentYear)
            ->where('id_user', $user->id)
            ->sum('montant');
        $paiements = paiements::whereYear('created_at', $currentYear)
            ->where('id_user', $user->id)
            ->sum('montant');
        $stat_eleves = [];
        $stat_professeurs = [];
        $stat_depenses = [];
        $stat_paiements = [];

        for ($i = 1; $i <= 12; $i++) {
            $stat_eleves[] = eleves::whereMonth('created_at', $i)
                ->whereYear('created_at', $currentYear)
                ->count();
            $stat_professeurs[] = professeurs::whereMonth('created_at', $i)
                ->whereYear('created_at', $currentYear)
                ->count();
            $stat_depenses[] = depenses::whereMonth('created_at', $i)
                ->whereYear('created_at', $currentYear)
                ->sum('montant');
            $stat_paiements[] = paiements::whereMonth('created_at', $i)
                ->whereYear('created_at', $currentYear)
                ->sum('montant');
        }

        return view('admin.finances.index')
            ->with('eleves', $eleves)
            ->with('professeurs', $professeurs)
            ->with('depenses', $depenses)
            ->with('paiements', $paiements)
            ->with('stat_eleves', $stat_eleves)
            ->with('stat_professeurs', $stat_professeurs)
            ->with('stat_depenses', $stat_depenses)
            ->with('stat_paiements', $stat_paiements)
            ->with("date", $currentYear)
        ;
    }




    public function programmes()
    {
        $programmes = programmes::select("title", "start", "end", "url")
            ->where('id_user', Auth::user()->id)
            ->get();
        return response()->json($programmes, 200);
    }


}
