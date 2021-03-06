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

Route::get('/', function () {
    //return '<center><h1>Seja bem vindo ao laravel</h1></center>';
    return view('auth.login');
});

Route::get('/equipamentos', 'EquipamentoController@lista');

Route::get('/equipamento', 'EquipamentoController@cadastroEquipamento');

Route::get('/equipamentos/mostra/{id}', 'EquipamentoController@mostra');

Route::get('/equipamento/{id}/editar', 'EquipamentoController@editar');

Route::post('/equipamento/salvar', 'EquipamentoController@salvar');

Route::post('/equipamento/{id}/atualizar', 'EquipamentoController@atualizar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
