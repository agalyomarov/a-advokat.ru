<?php

use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SpecialityController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
   Route::get('/', [AdminMainController::class, 'index'])->name('home');

   Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
      Route::get('/', [ServiceController::class, 'index'])->name('index');
      Route::get('/create', [ServiceController::class, 'create'])->name('create');
      Route::post('/store', [ServiceController::class, 'store'])->name('store');
      Route::get('/{service}/edit', [ServiceController::class, 'edit'])->name('edit');
      Route::put('/{service}', [ServiceController::class, 'update'])->name('update');
      Route::get('/{service}/delete', [ServiceController::class, 'delete'])->name('delete');
   });

   Route::group(['prefix' => 'speciality', 'as' => 'speciality.'], function () {
      Route::get('/', [SpecialityController::class, 'index'])->name('index');
      Route::post('/store', [SpecialityController::class, 'store'])->name('store');
      // Route::get('/{service}/edit', [ServiceController::class, 'edit'])->name('edit');
      // Route::put('/{service}', [ServiceController::class, 'update'])->name('update');
      // Route::get('/{service}/delete', [ServiceController::class, 'delete'])->name('delete');
   });

   Route::group(['prefix' => 'personal', 'as' => 'personal.'], function () {
      // Route::get('/', [ServiceController::class, 'index'])->name('index');
      // Route::get('/create', [ServiceController::class, 'create'])->name('create');
      // Route::post('/store', [ServiceController::class, 'store'])->name('store');
      // Route::get('/{service}/edit', [ServiceController::class, 'edit'])->name('edit');
      // Route::put('/{service}', [ServiceController::class, 'update'])->name('update');
      // Route::get('/{service}/delete', [ServiceController::class, 'delete'])->name('delete');
   });
});
