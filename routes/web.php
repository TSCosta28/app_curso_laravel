<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobrenos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contacto', 'ContatoController@contacto')->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){return 'Login';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <br> <a href='.route('site.index').'>Clique aqui para ir para a pagina inicial</a>';
});

