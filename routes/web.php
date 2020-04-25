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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function(){
    return "Retomando el Estudio de Laravel despues de varios dias";
});

Route::get('/saludos/{nombre?}', function($nombre = ""){
    return "Bienvenido " . $nombre;
});

Route::get('/contactame', function(){
    return 'Seccion de contactos';
})->name('contactos');*/

Route::get('/home', function() {
    echo '<a href="'.route('contactos').'">Contactos 1</a><br>';
    echo '<a href="'.route('contactos').'">Contactos 2</a><br>';
    echo '<a href="'.route('contactos').'">Contactos 3</a><br>';
    echo '<a href="'.route('contactos').'">Contactos 4</a><br>';
    echo '<a href="'.route('contactos').'">Contactos 5</a>';
});

/*Route::get('/{nombre?}', function($nombre = 'Invitado'){
    return 'Bienvenido '. $nombre;
});

$portfolios = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4'],
    'title' => 'Proyecto #5'
];*/

Route::view('/', 'home')->name('home'); // Forma reducida de declarar una ruta.

Route::view('/about', 'about')->name('about');

//Route::view('/portfolio', 'portfolio', compact('portfolios'))->name('portfolio');

//Route::resource('/portfolio', 'PortfolioController');

Route::get('/portfolio', 'ProjectController@index')->name('projects.index');

Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create');

Route::get('/portfolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');

Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');


Route::post('/portfolio', 'ProjectController@store')->name('projects.store');


Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');


Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', 'MessageController@store');