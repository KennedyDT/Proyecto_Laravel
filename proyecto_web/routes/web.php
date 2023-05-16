<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorsController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ServicesController;

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



Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])->name('users.edit')->middleware('can:admin.users.edit');

Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('users.update')->middleware('can:admin.users.edit');
Route::get('/usuarios/crear', [UserController::class, 'create'])->name('users.create')->middleware('can:admin.users.create');
Route::post('/usuarios', [UserController::class, 'store'])->name('users.store')->middleware('can:admin.users.create');
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index')->middleware('can:admin.users.index');

Route::resource('operators', OperatorsController::class)->names('admin.operators')->middleware('can:admin.operators');

// Ruta sin restricciones de permisos
Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');

// Rutas con restricciones de permisos
Route::middleware('can:admin.productos')->group(function () {
    Route::resource('productos', ProductosController::class)->except('index')->names('admin.productos');
});


Route::get('/index', function () {
    return view('views_html.index');
});

Route::get('/', function () {
    return view('views_html.index');
});

Route::get('/about', function () {
    return view('views_html.about');
});

Route::get('/contact', function () {
    return view('views_html.contact');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
