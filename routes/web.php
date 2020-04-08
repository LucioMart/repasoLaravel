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

App::setLocale('es');

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/* utilizando el sistema de rutas de laravel
Route::get('/', function(){
    return "Comensando con el repado de laravel";
});*/

// pasandole parametros a las rutas
/*Route::get('/saludo/{nombre}', function($nombre){
    return "Enviando variables en las rutas. Bienvenido ".$nombre;
});*/

// pasandoles parametros opcionales a las rutas.
Route::get('/saludo/{nombre?}', function($nombre = 'Invitado'){
    return "Enviando variables opcionales por las rutas. Bienvenido ".$nombre;
})->name('saludos');

Route::get('contactactame', function() {
    return "Sección de Contactos";
})->name('contacto');

/* Colocandole nombres a la ruta, es una forma de identificar a la misma, y no perder el acceso en caso de que cambie la misma.
Route::get('/', function(){
    echo "<a href='".route('contacto')."'> Contacto 1</a><br>";
    echo "<a href='".route('contacto')."'> Contacto 2</a><br>";
    echo "<a href='".route('contacto')."'> Contacto 3</a><br>";
    echo "<a href='".route('contacto')."'> Contacto 4</a><br>";
    echo "<a href='".route('contacto')."'> Contacto 5</a><br>";
});*/

/*Route::get('/{nombre?}', function($nombre = 'Invitado'){
    return view('home')->with(['nombre'=>$nombre]);
})->name('home');*/

// simplificar rutas con view
// Route::view('/home', 'home', ['nombre'=>'Lucio']);

// 

/*$portafolio = [
    ['title' => 'proyecto #1'],
    ['title' => 'proyecto #2'],
    ['title' => 'proyecto #3'],
    ['title' => 'proyecto #4'],
];*/

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
//Route::view('/portafolio', 'portafolio', compact('portafolio'))->name('portafolio');
Route::get('/portafolio', 'PortafolioController')->name('portafolio');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', 'MessagesController@store');

//Route::resource('porfolio', 'porfolio');