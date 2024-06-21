<?php

namespace App\Console\Commands;

use App\Models\eleves;
use App\Models\notifications;
use App\Models\paiements;
use Illuminate\Console\Command;
use App\Models\Eleve;
use App\Models\Paiement;
use App\Models\Notification;
use Carbon\Carbon;

class CheckPaiements extends Command
{
    protected $signature = 'check:paiements';
    protected $description = 'Vérifie les paiements des élèves pour le mois en cours et crée des notifications pour ceux qui n\'ont pas payé après le 10 du mois';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $today = Carbon::now();

        if ($today->day <= 10) {
            $this->info('No need to check before the 10th of the month.');
            return;
        }

        $eleves = eleves::all();

        foreach ($eleves as $eleve) {
            $paiement = paiements::where('id_eleve', $eleve->id)
                ->whereMonth('mois', $currentMonth->month)
                ->whereYear('mois', $currentMonth->year)
                ->first();

            if (!$paiement) {
                $existingNotification = notifications::where('id_eleve', $eleve->id)
                    ->whereMonth('mois', $currentMonth->month)
                    ->whereYear('mois', $currentMonth->year)
                    ->first();

                if (!$existingNotification) {
                    notifications::create([
                        'id_eleve' => $eleve->id,
                        'message' => 'L\'élève n\'a pas payé pour le mois en cours.',
                        'mois' => $currentMonth
                    ]);

                    $this->info('Notification créée pour l\'élève: ' . $eleve->nom);
                }
            }
        }

        $this->info('Vérification des paiements terminée.');
    }
}
