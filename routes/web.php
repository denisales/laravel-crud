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

Route::get('/', 'homeController@home');

Route::prefix('cadastro')->as('cadastro.')->group(function()
{
    Route::get('','cadastroController@cadastro')->name('cadastro');

    Route::get('editar/{id}','cadastroController@editar')->name('editar');

    Route::get('visualizar/{id}','cadastroController@visualizar')->name('visualizar');
    
    Route::post('atualizar','cadastroController@atualizar')->name('atualizar');

    Route::post('salvar','cadastroController@salvar')->name('salvar');

    Route::get('excluir/{id}','cadastroController@excluir')->name('excluir');
});


