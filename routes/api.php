<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Rotas para AlunoController com middleware de autenticação e autorização
Route::middleware(['auth:sanctum', 'aluno'])->group(function () {
    Route::apiResource('aluno', AlunoController::class);
    Route::get('aluno/{id}/matricula', [AlunoController::class, 'getMatricula']);
    Route::get('aluno/{id}/plano', [AlunoController::class, 'getPlano']);
    Route::get('aluno/{id}/aula', [AlunoController::class, 'getAula']);
});

// Rota de login para API
Route::post('/login', [AlunoController::class, 'login'])->name('login');
