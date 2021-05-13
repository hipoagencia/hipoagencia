<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ContentController;

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


//Rota Geral de Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login-do', [AuthController::class, 'login'])->name('login.do');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {


});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    //Rotas protegidas Admin
    route::group(['middleware' => ['is_admin']], function () {

        Route::get('dashboard', [AuthController::class, 'dashboardAdmin'])->name('dashboard');

        //Rotas de Usuários
        Route::resource('users',  UserController::class);

        //Rotas de Produtos
        Route::post('products/image-order', [ProductController::class, 'imageOrder'])->name('products.imageOrder');
        Route::post('products/image-set-cover', [ProductController::class, 'imageSetCover'])->name('products.imageSetCover');
        Route::delete('products/remove-cover', [ProductController::class, 'imageRemove'])->name('products.imageRemove');
        Route::resource('products',  ProductController::class);

        //Rotas de Categorias
        Route::resource('categories', CategoriesController::class);

        //Rotas de Posts
        Route::resource('posts', PostController::class);

        //Rotas de Conteúdos
        Route::resource('content', ContentController::class);
    });
});


//Rotas de Usuário Logado
Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.'], function () {

    //Rotas protegidas Admin
    route::group(['middleware' => ['is_user']], function () {

        Route::get('dashboard', [AuthController::class, 'dashboardUser'])->name('dashboard');

    });

});

//Rota Tiny Filemanager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'is_admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

