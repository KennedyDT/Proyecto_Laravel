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
/*
Route::get('/operators', function () {
    return view('operators.index');
});

Route::get('/operators/create',[OperatorsController::class,'create']);
*/

/*Route::get('/operators', function () {
    return view('operators.index');
});*/


Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])->name('users.edit');

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/usuarios/crear', [UserController::class, 'create'])->name('users.create');
Route::post('/usuarios', [UserController::class, 'store'])->name('users.store');
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');




Route::resource('operators',OperatorsController::class)->names('admin.operators');

Route::resource('productos',ProductosController::class)->names('admin.productos');




Route::get('/index', function () {
    return view('views_html.index');
});

/*Route::get('/users', function () {
    return view('users.index');

}); */

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




