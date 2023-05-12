<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorsController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ServicesController;



Route::resource('operators',OperatorsController::class)->names('admin.operators');

Route::resource('productos',OperatorsController::class)->names('admin.productos');
