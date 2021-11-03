<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Teste2Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsAdminController;

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

//Route::get('/', function () {
 //  return view('welcome');
//});

Route::group(['prefix'=>'admin'], function() {

    Route::group(['prefix'=>'posts'], function() {

        Route::get('', [PostsAdminController::class,'index'])->name('admin');

        Route::get('create', [PostsAdminController::class,'create'])->name('admin.posts.create');

        Route::post('store/', [PostsAdminController::class,'store'])->name('admin.posts.store');

        Route::get('edit/{id}', [PostsAdminController::class,'edit'])->name('admin.posts.edit');

        Route::put('update/{id}', [PostsAdminController::class,'update'])->name('admin.posts.update');

        Route::get('destroy/{id}', [PostsAdminController::class,'destroy'])->name('admin.posts.destroy');
    });
});

Route::get('test/{nome}', [TestController::class,'index'])->name('teste');

Route::resource('doideira', Teste2Controller::class);

Route::get('notas', [TestController::class,'notas'])->name('notas');

Route::get('blog', [PostsController::class,'index'])->name('blog');

Route::get('/', [PostsController::class,'index'])->name('blog2');




