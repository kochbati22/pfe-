<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RHController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRole;
use App\Http\Middleware\CheckUserRole;


use App\Http\Controllers\PostierController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/postiers', [PostierController::class, 'afficher']);
Route::post('postier/login', [AuthController::class, 'loginForPostiers'])->middleware(CheckUserRole::class);
Route::get('postier/login', [AuthController::class, 'loginForPostiers'])->middleware(CheckUserRole::class);
use App\Http\Controllers\DemandeCongeController;

Route::post('/demande-conge', [DemandeCongeController::class, 'store']);
use App\Http\Controllers\DemandeMutationController;

Route::post('/demande-mutation', [DemandeMutationController::class, 'store']);
use App\Http\Controllers\DeclarationFamilialeController;

Route::post('/declaration-familiale', [DeclarationFamilialeController::class, 'create']);

Route::middleware('auth:sanctum')->get('/postier', [PostierController::class, 'getUserData']);