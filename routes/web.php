<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MidiaController;
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
/**
 * 
 * 
 */
Route::resource('about', 'AboutController');

Route::resource('footer', 'FooterController');

Route::resource('post','PostController');

Route::resource('contact','ContactController');

//Route::resource('product','ProductController');

Route::resource('midium', 'MidiumController');

Route::resource('products', 'ProductController');

Route::resource('Carousel', 'CarouselController');

Route::resource('section', 'SectionController');

/*
Route::get('midia', 'MidiaController@index');

Route::post('midia', 'MidiaController@post');

Route::put('midia/{midia}/edit', 'MidiaController@update');

Route::delete('midia/{midia}', 'MidiaController@destroy');
*/


//Route::get('image-upload', 'MidiaController@imageUpload')->name('admin.image.upload');

//Route::post('image-upload', 'MidiaController@imageUploadPost')->name('admin.image.upload.post');

/*
Route::get('/about_create', function(){

	return view('about', 'AboutController');
});
*/

///Tentativa de painel administrativo
Route::get('/painel', function(){
	return view('Hbase/Dashboard/src/pages/index');
});

///Buttons
Route::get('/sbAdmin_Buttons', function(){
	return view('Hbase/Dashboard/src/pages/buttons');
});

///Página em branco
Route::get('/sbAdmin_blank', function(){
	return view('Hbase/Dashboard/src/pages/blank');
});

///Página em branco
Route::get('/sbAdmin_flot', function(){
	return view('Hbase/Dashboard/src/pages/flot');
});

///Página em branco
Route::get('/sbAdmin_forms', function(){
	return view('Hbase/Dashboard/src/pages/forms');
});

///Página em branco
Route::get('/sbAdmin_grid', function(){
	return view('Hbase/Dashboard/src/pages/grid');
});

///Página em branco
Route::get('/sbAdmin_icons', function(){
	return view('Hbase/Dashboard/src/pages/icons');
});

///Página em branco
Route::get('/sbAdmin_login', function(){
	return view('Hbase/Dashboard/src/pages/login');
});

///Página em branco
Route::get('/sbAdmin_morris', function(){
	return view('Hbase/Dashboard/src/pages/morris');
});

///Página em branco
Route::get('/sbAdmin_tables', function(){
	return view('Hbase/Dashboard/src/pages/tables');
});

///Página em branco
Route::get('/sbAdmin_panels-wells', function(){
	return view('Hbase/Dashboard/src/pages/panels-wells');
});

///Página em branco
Route::get('/sbAdmin_notifications', function(){
	return view('Hbase/Dashboard/src/pages/notifications');
});

///Página em branco
Route::get('/sbAdmin_typography', function(){
	return view('Hbase/Dashboard/src/pages/typography');
});

///Index do Dashboard
Route::get('/Dashboard_index', function(){
	return view('Hbase/Dashboard/src/index');
});

//É a home, página principal da loja de roupas. Modificar para xamppAplimare_index_roupas.
Route::get('/', 'HomeController@index');

/*
Route::get('/', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

Route::get('/', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});

Route::get('/', function(){
	return view('Hbase/Home/src/xamppAplimare_index');
});
*/

//Aqui é uma rota para a área administrativa do site. Acesso Administrador ao site roupas.
//Preciso pensar se implemento o admin por loja (área de negócio) ou se implemento um admin
//para todos em um só.
///Administração do site - Configurações da página.
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

//Aqui é uma rota para a área do Dashboard do site. Acesso Administrador ao site roupas.
///Administração do site - Painel Dashboard.
Route::get('/dASHBOARD', function(){
	return view('Hbase/Dashboard/src/index');
});

Route::get('/dashboard', function(){
	return view('Hbase/Dashboard/src/index');
});

Route::get('/DASHBOARD', function(){
	return view('Hbase/Dashboard/src/index');
});

Route::get('/Dashboard', function(){
	return view('Hbase/Dashboard/src/index');
});

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

//Página em manutenção
Route::get('/paginaManutencao', function(){
	return view('Errors/paginaManutencao');
});

Route::get('/PaginaManutencao', function(){
	return view('Errors/paginaManutencao');
});

Route::get('/paginamanutencao', function(){
	return view('Errors/paginaManutencao');
});

Route::get('/PAGINAMANUTENCAO', function(){
	return view('Errors/paginaManutencao');
});

//Aqui é uma rota de erro 404 para quando sair do fluxo normal do programa
// e não encontrar página pesqquisada.
Route::get('/Erros404', function(){
	return view('Errors/404');
});

Route::get('/eRROS404', function(){
	return view('Errors/404');
});

Route::get('/erros404', function(){
	return view('Errors/404');
});

Route::get('/ERROS404', function(){
	return view('Errors/404');
});

//Aqui é uma rota de erro 500 para erros internos como erro de lógica.
Route::get('/Erros500', function(){
	return view('Errors/500');
});

Route::get('/eRROS500', function(){
	return view('Errors/500');
});

Route::get('/erros500', function(){
	return view('Errors/500');
});

Route::get('/ERROS500', function(){
	return view('Errors/500');
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


//Autenticação do usuário no sistema administrativo
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



