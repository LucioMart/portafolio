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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::get('/', function(){
    return "Retomando el Estudio de Laravel despues de varios dias";
});*/

Route::get('/saludos/{nombre?}', function($nombre = ""){
    return "Bienvenido " . $nombre;
});

Route::get('/contactame', function(){
    return 'Seccion de contactos';
})->name('contactos');

Route::get('/home', function() {
    echo '<a href="'.route('contactos').'">Contactos 1</a><br>';
    echo '<a href="'.route('contactos').'">Contactos 2</a><br>';
    echo '<a href="'.route('contactos').'">Contactos 3</a><br>';
    echo '<a href="'.route('contactos').'">Contactos 4</a><br>';
    echo '<a href="'.route('contactos').'">Contactos 5</a>';
});

/*Route::get('/{nombre?}', function($nombre = 'Invitado'){
    return 'Bienvenido '. $nombre;
});*/

Route::view('/', 'home')->name('home'); // Forma reducida de declarar una ruta.

Route::view('/about', 'about')->name('about');

Route::view('/portfolio', 'portfolio')->name('portfolio');

Route::view('/contact', 'contact')->name('contact');