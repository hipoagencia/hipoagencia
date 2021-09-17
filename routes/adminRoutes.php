<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserRoleController;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    route::group(['middleware' => ['is_admin']], function () {

        Route::get('dashboard', [AuthController::class, 'dashboardAdmin'])->name('dashboard');

        //Rotas de Usuários
        Route::resource('users', UserController::class);
        Route::get('user/get', [UserController::class, 'show'])->name('users.get');
        Route::get('user/logs', [UserController::class, 'log'])->name('users.log');
        Route::get('users/logs/get', [UserController::class, 'logShow'])->name('users.log.get');
        Route::get('users/log/{id}', [UserController::class, 'logOpen'])->name('users.log.open');
        Route::post('user/login-as-user/{user}', [UserController::class, 'loginAsUser'])->name('users.loginAsUser');

        //Rotas de Produtos
        Route::post('products/image-order', [ProductController::class, 'imageOrder'])->name('products.imageOrder');
        Route::post('products/image-set-cover', [ProductController::class, 'imageSetCover'])->name('products.imageSetCover');
        Route::delete('products/remove-cover', [ProductController::class, 'imageRemove'])->name('products.imageRemove');
        Route::resource('products', ProductController::class);
        Route::get('products/get', [ProductController::class, 'show'])->name('products.get');
        Route::get('plans', [ProductController::class, 'plans'])->name('products.plans');
        Route::get('plans/get', [ProductController::class, 'plansGet'])->name('products.plans.get');


        //Rotas de Categorias
        Route::resource('categories', CategoriesController::class);

        //Rotas de Categorias
        Route::resource('roles', UserRoleController::class)->middleware('role:superAdmin');

        //Rotas de Posts
        Route::resource('posts', PostController::class);
        Route::get('posts/get', [PostController::class, 'show'])->name('posts.get');

        //Rotas de Conteúdos
        Route::resource('content', ContentController::class);

        //Rotas de Pedidos
        Route::resource('orders', OrderController::class);
        Route::get('orders/get', [OrderController::class, 'show'])->name('orders.get');

        //SiteMap
        Route::get('site-map', function () {
            \Spatie\Sitemap\SitemapGenerator::create(env('app_url'))->writeToFile(public_path('sitemap.xml'));

            //Retorna para a Dashboard com mensagem de confirmação
        });

        //BackupsList
        Route::get('backup-list', function () {
            $path = storage_path('app\bkp');
            $files = scandir($path);
            foreach ($files as $file){
                echo $file;
            }
        });

        //Rotas de Galerias
        Route::post('gallery/image-order', [GalleryController::class, 'imageOrder'])->name('gallery.imageOrder');
        Route::post('gallery/image-set-cover', [GalleryController::class, 'imageSetCover'])->name('gallery.imageSetCover');
        Route::delete('gallery/remove-cover', [GalleryController::class, 'imageRemove'])->name('gallery.imageRemove');
        Route::resource('gallery', GalleryController::class);

    });
});
