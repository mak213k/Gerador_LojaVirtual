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

/*
Route::get('/', function () {
    return view('welcome');
});

*/

//É a home, página principal da loja de roupas. Modificar para xamppAplimare_index_roupas.
Route::get('/', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

Route::get('/', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

Route::get('/', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

Route::get('/', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

///Administração do site.
Route::get('/aDMIN', function(){
	return view('Hbase/Admin/src/Admin_roupas_Home');
});

Route::get('/admin', function(){
	return view('Hbase/Admin/src/Admin_roupas_Home');
});

Route::get('/ADMIN', function(){
	return view('Hbase/Admin/src/Admin_roupas_Home');
});

Route::get('/Admin', function(){
	return view('Hbase/Admin/src/Admin_roupas_Home');
});


//Aqui é uma rota para a área administrativa do site. Acesso Administrador ao site roupas.
//Preciso pensar se implemento o admin por loja (área de negócio) ou se implemento um admin
//para todos em um só.

///Administração dos produtos - roupas.
///
Route::get('/AdminProduct', function(){
	return view('Hbase/Admin/src/Admin_roupas_Home');
});

Route::get('/ADMINPRODUCT', function(){
	return view('Hbase/Admin/src/Admin_roupas_Home');
});

Route::get('/adminproduct', function(){
	return view('Hbase/Admin/src/Admin_roupas_Home');
});

Route::get('/Adminproduct', function(){
	return view('Hbase/Admin/src/Admin_roupas_Home');
});

///Rota para criação dos artigos da página Home.

Route::get('/Artigo', function(){
	return view('Hbase/Home/src/xamppAplimare_artigo');
});

Route::get('/ARTIGO', function(){
	return view('Hbase/Home/src/xamppAplimare_artigo');
});

Route::get('/artigo', function(){
	return view('Hbase/Home/src/xamppAplimare_artigo');
});

Route::get('/aRTIGO', function(){
	return view('Hbase/Home/src/xamppAplimare_artigo');
});


////Aqui fica informações para contato como e-mail, telefone, whatsapp e outros.
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

//Aqui é uma rota de erro 503 para quando sair do fluxo normal do programa
// e não detecta a página correta.
Route::get('/Erros503', function(){
	return view('Errors/503');
});

Route::get('/eRROS503', function(){
	return view('Errors/503');
});

Route::get('/erros503', function(){
	return view('Errors/503');
});

Route::get('/ERROS503', function(){
	return view('Errors/503');
});

//Aqui é uma rota de erro 504 para quando sair do fluxo normal do programa
// e não encontrar página.
Route::get('/Erros504', function(){
	return view('Errors/504');
});

Route::get('/eRROS504', function(){
	return view('Errors/504');
});

Route::get('/erros504', function(){
	return view('Errors/504');
});

Route::get('/ERROS504', function(){
	return view('Errors/504');
});


//Aqui informações gerais como localização da empresa, outras unidades. Ligações
//externas e etc.
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


//Autenticação do usupario no sistema administrativo
Route::get('/LoginAdmin', function(){
	return view('Hbase/LoginAdmin/src/LoginAdmin');
});    

Route::get('/lOGINaDMIN', function(){
	return view('Hbase/LoginAdmin/src/LoginAdmin');
});             

Route::get('/LOGINADMIN', function(){
	return view('Hbase/LoginAdmin/src/LoginAdmin');
});             

Route::get('/loginadmin', function(){
	return view('Hbase/LoginAdmin/src/LoginAdmin');
});      


//Autenticação do cliente no sistema
Route::get('/Login', function(){
	return view('Hbase/Login/src/Login');
});    

Route::get('/lOGIN', function(){
	return view('Hbase/Login/src/Login');
});             

Route::get('/LOGIN', function(){
	return view('Hbase/Login/src/Login');
});             

Route::get('/login', function(){
	return view('Hbase/Login/src/Login');
});    


//Aqui fica os produtos, preciso modificar para produtos_roupa. Assim poderei 
//usar xamppAmplimare_Produtos com outros produtos para cada loja diferente.
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


//Aqui fica informações sobre a empresa proprietária do site

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



