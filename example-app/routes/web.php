<?php

use App\Http\Controllers\Exercicio1Controller;
use App\Http\Controllers\ExerciciosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/inicial/{nome}', function ($nome) {
    return "Olá mundo".$nome;
});

Route:: get('/exercicio1', function() {
    return view('exercicio1');
});

Route:: post('/resposta_exercicio1', 
    [Exercicio1Controller::class, 'calcularJuros']);


Route:: get('/exer1',[ExerciciosController ::class, 'mostrarFormulario1']);

Route:: post('/exer1resp',[ExerciciosController ::class, 'calcularFormulario1']);



Route:: get('/exer2',[ExerciciosController ::class, 'mostrarFormulario2']);

Route:: post('/exer2resp',[ExerciciosController ::class, 'calcularFormulario2']);


Route:: get('/exer3',[ExerciciosController ::class, 'mostrarFormulario3']);

Route:: post('/exer3resp',[ExerciciosController ::class, 'calcularFormulario3']);


Route:: get('/exer4',[ExerciciosController ::class, 'mostrarFormulario4']);

Route:: post('/exer4resp',[ExerciciosController ::class, 'calcularFormulario4']);


Route:: get('/exer5',[ExerciciosController ::class, 'mostrarFormulario5']);

Route:: post('/exer5resp',[ExerciciosController ::class, 'calcularFormulario5']);


Route:: get('/exer6',[ExerciciosController ::class, 'mostrarFormulario6']);

Route:: post('/exer6resp',[ExerciciosController ::class, 'calcularFormulario6']);


Route:: get('/exer7',[ExerciciosController ::class, 'mostrarFormulario7']);

Route:: post('/exer7resp',[ExerciciosController ::class, 'calcularFormulario7']);


Route:: get('/exer8',[ExerciciosController ::class, 'mostrarFormulario8']);

Route:: post('/exer8resp',[ExerciciosController ::class, 'calcularFormulario8']);


Route:: get('/exer9',[ExerciciosController ::class, 'mostrarFormulario9']);

Route:: post('/exer9resp',[ExerciciosController ::class, 'calcularFormulario9']);


Route:: get('/exer10',[ExerciciosController ::class, 'mostrarFormulario10']);

Route:: post('/exer10resp',[ExerciciosController ::class, 'calcularFormulario10']);