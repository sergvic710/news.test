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

//Route::group(['prefix' =>'tags'], function() {
//    Route::get('/', \App\Http\Controllers\Tag\IndexControler::class)->name('tag.index');
//    Route::get('/create', \App\Http\Controllers\Tag\CreateControler::class)->name('tag.create');
//    Route::post('/', \App\Http\Controllers\Tag\StoreControler::class)->name('tag.store');
//    Route::get('/{tag}/edit', \App\Http\Controllers\Tag\EditControler::class)->name('tag.edit');
//    Route::get('/{tag}', \App\Http\Controllers\Tag\ShowControler::class)->name('tag.show');
//    Route::patch('/{tag}', \App\Http\Controllers\Tag\UpdateControler::class)->name('tag.update');
//    Route::delete('/{tag}', \App\Http\Controllers\Tag\DeleteControler::class)->name('tag.delete');
//});
//
//Route::group(['prefix' =>'colors'], function() {
//    Route::get('/', \App\Http\Controllers\Color\IndexControler::class)->name('color.index');
//    Route::get('/create', \App\Http\Controllers\Color\CreateControler::class)->name('color.create');
//    Route::post('/', \App\Http\Controllers\Color\StoreControler::class)->name('color.store');
//    Route::get('/{color}/edit', \App\Http\Controllers\Color\EditControler::class)->name('color.edit');
//    Route::get('/{color}', \App\Http\Controllers\Color\ShowControler::class)->name('color.show');
//    Route::patch('/{color}', \App\Http\Controllers\Color\UpdateControler::class)->name('color.update');
//    Route::delete('/{color}', \App\Http\Controllers\Color\DeleteControler::class)->name('color.delete');
//});
//
//Route::group(['prefix' =>'users'], function() {
//    Route::get('/', \App\Http\Controllers\User\IndexControler::class)->name('user.index');
//    Route::get('/create', \App\Http\Controllers\User\CreateControler::class)->name('user.create');
//    Route::post('/', \App\Http\Controllers\User\StoreControler::class)->name('user.store');
//    Route::get('/{user}/edit', \App\Http\Controllers\User\EditControler::class)->name('user.edit');
//    Route::get('/{user}', \App\Http\Controllers\User\ShowControler::class)->name('user.show');
//    Route::patch('/{user}', \App\Http\Controllers\User\UpdateControler::class)->name('user.update');
//    Route::delete('/{user}', \App\Http\Controllers\User\DeleteControler::class)->name('user.delete');
//});
//
//Route::group(['prefix' =>'products'], function() {
//    Route::get('/', \App\Http\Controllers\Product\IndexControler::class)->name('product.index');
//    Route::get('/create', \App\Http\Controllers\Product\CreateControler::class)->name('product.create');
//    Route::post('/', \App\Http\Controllers\Product\StoreControler::class)->name('product.store');
//    Route::get('/{product}/edit', \App\Http\Controllers\Product\EditControler::class)->name('product.edit');
//    Route::get('/{product}', \App\Http\Controllers\Product\ShowControler::class)->name('product.show');
//    Route::patch('/{product}', \App\Http\Controllers\Product\UpdateControler::class)->name('product.update');
//    Route::delete('/{product}', \App\Http\Controllers\Product\DeleteControler::class)->name('product.delete');
//});
