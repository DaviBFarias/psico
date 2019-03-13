<?php

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

//Chamada de views
Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/anamneses', function () {
    return view('anamneses');
});

Route::get('/funcionarios', function () {
    return view('funcionarios');
});

Route::get('/pacientes', function () {
    return view('pacientes');
});

Route::get('/painel', function () {
    return view('painel');
});

Route::get('/entrar', function () {
    return view('entrar');
});

Route::get('/registrar', function () {
    return view('registrar');
});


//Chamadas de Controllers
Route::post('/logar',[
    'uses' => 'LoginController@validarLogin'
]);