<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorsController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Admin\UserController;




Route::resource('operators',OperatorsController::class)->names('admin.operators');

Route::resource('productos',OperatorsController::class)->names('admin.productos');

Route::resource('users', UserController::class)->names('admin.users');
