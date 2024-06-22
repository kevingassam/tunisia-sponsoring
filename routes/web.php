<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\ExcelExport;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ProfesseurController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('clear_cache', function () {
    \Artisan::call('route:cache');
    \Artisan::call('view:cache');
    \Artisan::call('config:cache');
    \Artisan::call('cache:clear');
    dd("Cache is cleared");
});


Route::get('/', function () {
    return redirect('/fr');
});



Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale'], function () {

    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/connexion', [HomeController::class, 'connexion'])->name('login');

});

Route::middleware(['role:admin', 'auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/admin/finances', [AdminController::class, 'finnaces'])->name('finnaces');
    Route::post('/admin/finances', [AdminController::class, 'finnaces'])->name('post.finnaces');
    Route::get('/api/programmes', [AdminController::class, 'programmes'])->name('programmes');
    Route::get('/gerer/programmes', [AdminController::class, 'gerer_programmes'])->name('gerer_programmes');

    //gestion des eleves
    Route::get('/admin/eleves', [EleveController::class, 'index'])->name('eleves');

    //gestion des professeurs
    Route::get('/admin/professeurs', [ProfesseurController::class, 'index'])->name('professeurs');


    //gestion des paiements
    Route::get('/admin/paiements', [PaiementController::class, 'index'])->name('paiements');
    Route::get('/admin/paiement/print/{id}', [PaiementController::class, 'print'])->name('print_paiement');
    Route::get('/admin/paiement/print/{id_eleve}/eleves', [PaiementController::class, 'print_eleve'])->name('print_paiement_eleve');
    //gestion des depenses
    Route::get('/admin/depenses', [DepenseController::class, 'index'])->name('depenses');

    //gestion matiere
    Route::get('/admin/matieres', [MatiereController::class, 'index'])->name('matieres');

    //export excel file
    Route::get('/admin/eleves/export', [ExcelExport::class, 'export_eleves'])->name('export_eleves');
    Route::get('/admin/professeurs/export', [ExcelExport::class, 'export_professeurs'])->name('export_professeurs');
    Route::get('/admin/paiements/export', [ExcelExport::class, 'export_paiements'])->name('export_paiements');
    Route::get('/admin/depenses/export', [ExcelExport::class, 'export_depenses'])->name('export_depenses');
    Route::get('/admin/matieres/export', [ExcelExport::class, 'export_matieres'])->name('export_matieres');

});


