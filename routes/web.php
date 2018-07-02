<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Index', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

Route::get('/iNDEX', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

Route::get('/index', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

Route::get('/INDEX', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

Route::get('/Informacoes', function(){
	return view('Hbase/Informacoes/src/xamppAmplimare_Informacoes');
});    

Route::get('/iNFORMACOES', function(){
	return view('Hbase/Informacoes/src/xamppAmplimare_Informacoes');
});             

Route::get('/INFORMACOES', function(){
	return view('Hbase/Informacoes/src/xamppAmplimare_Informacoes');
});             

Route::get('/informacoes', function(){
	return view('Hbase/Informacoes/src/xamppAmplimare_Informacoes');
});                       

Route::get('/Sobre', function(){
	return view('Hbase/Sobre/src/xamppAmplimare_Sobre');
});

Route::get('/sOBRE', function(){
	return view('Hbase/Sobre/src/xamppAmplimare_Sobre');
});

Route::get('/sobre', function(){
	return view('Hbase/Sobre/src/xamppAmplimare_Sobre');
});

Route::get('/SOBRE', function(){
	return view('Hbase/Sobre/src/xamppAmplimare_Sobre');
});

Route::get('/Contato', function(){
	return view('Hbase/Contato/src/xamppAmplimare_Contato');
});

Route::get('/contato', function(){
	return view('Hbase/Contato/src/xamppAmplimare_Contato');
});

Route::get('/CONTATO', function(){
	return view('Hbase/Contato/src/xamppAmplimare_Contato');
});

Route::get('/cONTATO', function(){
	return view('Hbase/Contato/src/xamppAmplimare_Contato');
});

Route::get('/Produtos', function(){
	return view('Hbase/Produtos/src/xamppAmplimare_Produtos');
});

Route::get('/pRODUTOS', function(){
	return view('Hbase/Produtos/src/xamppAmplimare_Produtos');
});

Route::get('/PRODUTOS', function(){
	return view('Hbase/Produtos/src/xamppAmplimare_Produtos');
});

Route::get('/produtos', function(){
	return view('Hbase/Produtos/src/xamppAmplimare_Produtos');
});

Route::get('/Erros', function(){
	return view('Errors/503');
});

Route::get('/eRROS', function(){
	return view('Errors/503');
});

Route::get('/erros', function(){
	return view('Errors/503');
});

Route::get('/ERROS', function(){
	return view('Errors/503');
});