<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormEmpresaController;
use App\Http\Controllers\ContactController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'home')->name('home');
Route::view('/blog', 'blog')->name('blog');

Route::get('/empresa', [FormEmpresaController::class, 'crearFormEmpresa'])->name('empresa');
Route::post('/empresaSubmit', [FormEmpresaController::class, 'guardarEmpresa']);

Route::resource('contacts', ContactController::class);
// Esto teóricamente es lo mismo que:  Route::resource('/contacts', 'App\Http\Controllers\ContactController');
// Pero recordar: si lo quito puedo quitar el use de arriba
// En todo caso, resource() hace que cada vez lo llame como toca: GET está mapeado al método index() del controlador, etc








/*
Rutas pre-explicación de vistas:


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('content.dashboard');
})->name('dashboard');

//Rutas para métodos de formulario: get me carga el formulario, post toma los datos
Route::get('/formulario', [FormEmpresaController::class, 'crearFormEmpresa'])->name('formulario');

Route::post('/formulario', [FormEmpresaController::class, 'guardarFormEmpresa'])->name('submit');

Route::middleware(['auth:sanctum', 'verified'])->get('/formulario', function () {
    return view('content.formEmpresa');
})->name('formulario');
*/
