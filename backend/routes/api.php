<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CateogoriaController;


 

Route::apiResource('categorias', CateogoriaController::class);
