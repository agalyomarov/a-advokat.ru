<?php

use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
   Route::get('/', [AdminMainController::class, 'index'])->name('admin.home');
   Route::get('/service', [ServiceController::class, 'index'])->name('admin.service.index');
   Route::get('/service/create', [ServiceController::class, 'create'])->name('admin.service.create');
   Route::post('/service/store', [ServiceController::class, 'store'])->name('admin.service.store');
});
