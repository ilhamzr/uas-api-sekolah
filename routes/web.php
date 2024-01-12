<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //guru
    $router->get('/guru', 'guruController@index');
    $router->get('/guru/{id}', 'guruController@show');
    $router->post('/guru', 'guruController@store');
    $router->put('/guru/{id}', 'guruController@update');
    $router->delete('/guru/{id}', 'guruController@destroy');
    //kelas
    $router->get('/kelas', 'kelasController@index');
    $router->get('/kelas/{id}', 'kelasController@show');
    $router->post('/kelas', 'kelasController@store');
    $router->put('/kelas/{id}', 'kelasController@update');
    $router->delete('/kelas/{id}', 'kelasController@destroy');
    //mata_pelajaran
    $router->get('/mata_pelajaran', 'mata_pelajaranController@index');
    $router->get('/mata_pelajaran/{id}', 'mata_pelajaranController@show');
    $router->post('/mata_pelajaran', 'mata_pelajaranController@store');
    $router->put('/mata_pelajaran/{id}', 'mata_pelajaranController@update');
    $router->delete('/mata_pelajaran/{id}', 'mata_pelajaranController@destroy');
    //nilai
    $router->get('/nilai', 'nilaiController@index');
    $router->get('/nilai/{id}', 'nilaiController@show');
    $router->post('/nilai', 'nilaiController@store');
    $router->put('/nilai/{id}', 'nilaiController@update');
    $router->delete('/nilai/{id}', 'nilaiController@destroy');
    //siswa
    $router->get('/siswa', 'siswaController@index');
    $router->get('/siswa/{id}', 'siswaController@show');
    $router->post('/siswa', 'siswaController@store');
    $router->put('/siswa/{id}', 'siswaController@update');
    $router->delete('/siswa/{id}', 'siswaController@destroy');

});