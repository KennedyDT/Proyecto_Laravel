<?php

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

Route::get('/operators', function () {
    return view('operators.index');
});

Route::get('/operators/index',[OperatorsController::class,'index']);

Route::resource('operators',OperatorsController::class);

Route::get('/services/index',[ServicesController::class,'index']);

Route::get('/services/create',[ServicesController::class,'create']);

Route::post('/services/store',[ServicesController::class,'store']);

Route::get('/services/show',[ServicesController::class,'show']);

Route::get('dowload-pdf','\App\Http\Controller\ProductosController@generar_pdf')->name('descargar-pdf');


/* Route::put('/services/{service}',[ServicesController::class,'index'])->name('services.update'); 
*/


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

Route::get('/items',[ProductosController::class,'index']);

Route::get('/services',[ServicesController::class,'index']);

//Route::get('/items', function () {
  //  return view('views_html.items');
//});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



