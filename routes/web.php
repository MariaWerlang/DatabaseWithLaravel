<?php

use App\Models\Servicos;
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

Route::get('/', function () {
    $meuprimeiroservico = new Servicos;
    $meuprimeiroservico->nome = "pintura";
    $meuprimeiroservico->telefone = "11234567892";
    $meuprimeiroservico->save();
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

