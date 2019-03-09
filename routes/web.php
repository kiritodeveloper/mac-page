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
Route::get('index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('inicio.home');
});

Route::get('trabajo',function(){
	return view('trabajos.mas');
});
Route::get('hostin',function(){
	return view('planes.planes');
});

Route::get('contact',function(){
	return view('contactanos.contact');
});
Route::get('porco',function(){
	return view('desarrollosof/porco');
});
Route::get('huayna',function(){
	return view('desarrollosof.huayna');
});
Route::get('digitalizacion',function(){
	return view('desarrollosof.digitalizacion');
});
Route::get('camaras',function(){
	return view('instalacion.camaras');
});
Route::get('today',function(){
	return view('camaras.today');
});
Route::get('today1',function(){
	return view('camaras.today1');
});
Route::get('clientes',function(){
	return view('clientes.clientes');
});
Route::get('bio',function(){
	return view('camaras.bio');
});
Route::get('install',function(){
	return view('camaras.install');
});

Route::get('redes',function(){
	return view('camaras.redes');
});
Route::get('vp',function(){
	return view('camaras.vp');
});
Route::get('games',function(){
    return view('games.portada');
});
Route::get('gamesppt',function(){
    return view('games.index');
});
Route::get('gameschess',function(){
    return view('games.ajedres');
});




Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
//Clear migrar:
Route::get('/migrate', function() {
    $exitCode = Artisan::call('migrate');
    return '<h1>migrando datos ...</h1>';
});
Auth::routes();
Route::group(['middleware'=>'auth'],function (){

    Route::get('usuarios', 'UserController@index')
        ->name('users.index');
    
    Route::get('/usuarios/{user}', 'UserController@show')
        ->where('user', '[0-9]+')
        ->name('users.show');
    
    Route::get('nuevo', 'UserController@create')->name('users.create');
    
    Route::post('usuarios', 'UserController@store');
    
    Route::get('{user}', 'UserController@edit')->name('users.edit');
    
    Route::put('{user}', 'UserController@update');
        
    Route::delete('{user}', 'UserController@destroy')->name('users.destroy');
    
});
