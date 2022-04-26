<?php

use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index']);
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
   Route::get('/', [AdminMainController::class, 'index']);
});
