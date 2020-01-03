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

// Route::get('/', function(){
//    return view('welcome');
// });

Route::get('/', 'Controller@listarImoveis')->name('list.imoveis');
Route::any('/busca', 'Controller@busca')->name('busca');
Route::post('/consulta-view', 'Controller@consulta')->name('consulta');
Route::get('/imoveis/{id}', 'Controller@imovelId')->name('list.id');
// Route::get('/admin', 'AuthController@dashboard')->name('admin');
// Route::get('/login', 'AuthController@loginForm')->name('admin.login');
// Route::get('/logout', 'AuthController@logout')->name('admin.logout');
// Route::post('/admin/login/do', 'authController@login')->name('admin.login.do');
