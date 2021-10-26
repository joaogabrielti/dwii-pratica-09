<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessorController;
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

Route::get('', function () {
    return view('welcome');
})->name('index');

Route::resource('curso', CursoController::class);
Route::resource('disciplina', DisciplinaController::class);
Route::resource('professor', ProfessorController::class);
Route::resource('aluno', AlunoController::class);

Route::get('aluno/{aluno}/edit-matricula', [AlunoController::class, 'editMatriculas'])->name('aluno.editMatriculas');
Route::put('aluno/{aluno}/edit-matricula', [AlunoController::class, 'updateMatriculas']);
