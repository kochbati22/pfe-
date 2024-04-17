<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RHController;
use App\Http\Middleware\CheckSuperAdmin;
use App\Http\Middleware\CheckRole;
use App\Http\Middleware\PreventDirectAccess;
use App\Http\Controllers\PostierController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DemandeCongeController;
use App\Http\Controllers\DemandeMutationController;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Route pour traiter la soumission du formulaire de connexion
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

// Route pour la déconnexion
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
// Route pour la redirection après la connexion réussie en fonction du rôle
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware(CheckRole::class . ':super_admin');;
    Route::get('rh_dashboard', [AuthController::class, 'rhDashboard'])->name('rh_dashboard')->middleware(CheckRole::class . ':rh');
});// Routes pour les opérations réservées au super administrateur
Route::group(['middleware' => ['auth', CheckSuperAdmin::class ,PreventDirectAccess::class]], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/rh/create', [RHController::class, 'create'])->name('rh.create');
    Route::post('/rh', [RHController::class, 'store'])->name('rh.store');
    Route::get('/supertadmin', [RHController::class, 'profilesupertadmin'])->name('supertadmin');
//liste des rh
Route::get('/rh/listeRH', [RHController::class, 'listeRH'])->name('rh.listeRH');
// Route pour afficher le formulaire de modification d'un RH
Route::get('/rh/{id}/edit', [RHController::class, 'edit'])->name('rh.edit');

// Route pour mettre à jour les informations d'un RH
Route::put('/rh/{id}', [RHController::class, 'update'])->name('rh.update');

// Route pour supprimer un RH
Route::delete('/rh/{id}', [RHController::class, 'destroy'])->name('rh.destroy');
});
Route::group(['middleware' => ['auth', PreventDirectAccess::class]], function () {
    // Route pour afficher le formulaire de création d'un postier
    Route::get('/postier/create', [PostierController::class, 'create'])->name('postier.create');
    // Route pour enregistrer un nouveau postier
    Route::post('/postier', [PostierController::class, 'store'])->name('postier.store');
    // Route pour afficher la liste des postiers
    Route::get('/postier/index', [PostierController::class, 'index'])->name('postier.index');
    // Route pour afficher le formulaire de modification d'un postier
    Route::get('/postier/{id}/edit', [PostierController::class, 'edit'])->name('postier.edit');
    // Route pour mettre à jour les informations d'un postier
    Route::put('/postier/{id}', [PostierController::class, 'update'])->name('postier.update');
    // Route pour supprimer un postier
    Route::delete('/postier/{id}', [PostierController::class, 'destroy'])->name('postier.destroy');
    // Route pour afficher le profil de l'utilisateur (RH)
    Route::get('/profile', [PostierController::class, 'show'])->name('profile');
    // Route pour afficher la page de chat
Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');

});
//liste des demande conger
Route::get('/demandes_conger/index', [DemandeCongeController::class, 'index'])->name('demandes_conger.index');
//accepter les demande de conger et refuser les demande de conger
Route::post('/demandes_conger/{demandeConge}/accept', [DemandeCongeController::class, 'accept'])->name('demandes_conger.accept');
Route::post('/demandes_conger/{demandeConge}/refuse', [DemandeCongeController::class, 'refuse'])->name('demandes_conger.refuse');

Route::get('/demandemutation/index', [DemandeMutationController::class, 'index'])->name('demandemutation.index');
//accepter les demande de conger et refuser les demande de conger
Route::post('/demandemutation/{demandeMutation}/accept', [DemandeMutationController::class, 'accept'])->name('demandemutation.accept');
Route::post('/demandemutation/{demandeMutation}/refuse', [DemandeMutationController::class, 'refuse'])->name('demandemutation.refuse');
