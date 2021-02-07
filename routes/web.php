<?php

use App\Http\Controllers\PerfilController;
use App\Models\Perfil;
use App\Models\Projeto;
use App\Models\ProjetoColaborador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetoController;
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
    return view('welcome', ['projetos'=> Projeto::all(), 'colaboradores'=> Perfil::get()]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/projeto/{slug}', [ProjetoController::class, 'index'])->name('projeto');
Route::get('/perfil/{slug}', [PerfilController::class, 'index'])->name('perfil');

