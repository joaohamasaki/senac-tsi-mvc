<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/pelucias', function () {
    return view('pelucias', ['nome' => 'Cliente',
                'mostrar' => true,
                'pelucias' => [['id' => 1,
                                    'texto' => 'Pelúcia do Superman'],

                                ['id' => 2,
                                    'texto' => 'Pelúcia do He-man']]]);
});


Route::get('/avisos', function () {
    return view('avisos', ['nome' => 'Joao',
                'mostrar' => true,
                'avisos' => [['id' => 1,
                                'texto' => 'Feriados agora'],

                            ['id' => 2,
                                'texto' => 'Feriados semana que vem']]]);
});
