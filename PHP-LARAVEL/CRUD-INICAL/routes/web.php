<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;


Route::get('/', function () {
    return view('welcome');
});


// O método estático resource da classe Route recebe dois parâmetros: o endpoint das requisições, aqui definido por “/alunos” e o controlador que irá tratar as requisições, neste caso, AlunoController.
Route::resource("/alunos", AlunoController::class);

