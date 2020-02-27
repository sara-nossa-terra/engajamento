<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/lideres/{id}/destroy', 'UserController@destroy')->name('lideres.delete');
    Route::get('/pessoasajudadas/{id}/destroy', 'PessoasAjudadasController@destroy')->name('pessoasajudadas.delete');
    Route::get('/atividades/{id}/destroy', 'AtividadesController@destroy')->name('atividades.delete');
    Route::get('/revisao/{id}/destroy', 'RevisaoController@destroy')->name('revisao.delete');

    Route::resources([
        'lideres' => 'UserController',
        'pessoasajudadas' => 'PessoasAjudadasController',
        'atividades' => 'AtividadesController',
        'revisao' => 'RevisaoController',
    ]);

});