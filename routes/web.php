<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [\App\Http\Controllers\Site\SiteController::class,'index'])->name('site.index');
Route::get('/news/{news}', [\App\Http\Controllers\Site\SiteController::class,'show'])->name('site.news.show');
Route::get('/news/category/{category}', [\App\Http\Controllers\Site\SiteController::class,'category'])->name('site.news.category');


Route::group(['prefix' =>'manager'], function() {
    Route::get('/', [\App\Http\Controllers\Manager\CategoryController::class,'index'])->name('manager.index');
    Route::resource('category', \App\Http\Controllers\Manager\CategoryController::class)
    ->names([
        'create' => 'manager.category.create',
        'show' => 'manager.category.show',
        'index' => 'manager.category.index',
        'store' => 'manager.category.store',
        'update' => 'manager.category.update',
        'edit' => 'manager.category.edit',
        'destroy' => 'manager.category.destroy'
    ]);
    Route::resource('news', \App\Http\Controllers\Manager\NewsController::class)
        ->names([
            'create' => 'manager.news.create',
            'show' => 'manager.news.show',
            'index' => 'manager.news.index',
            'store' => 'manager.news.store',
            'update' => 'manager.news.update',
            'edit' => 'manager.news.edit',
            'destroy' => 'manager.news.destroy'
        ]);
});
