<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ContentController;


/*
|--------------------------------------------------------------------------
| Rotas do site sem estar logado
|--------------------------------------------------------------------------
*/



Route::group(['as' => 'web.'], function () {

    Route::get('/', function () {
        return view('web.construction');
    })->name('construction');

    Route::get('/inicio', [ContentController::class, 'home'])->name('home');

    Route::get('/sobre', function () {
        return view('web.about');
    })->name('about');

    Route::get('especialidade/coracao', [ContentController::class, 'specialtyHeart'])->name('specialtyHeart');

    Route::get('blog', [ContentController::class, 'blog'])->name('blog');
    Route::get('blog/article/{slug}', [ContentController::class, 'article'])->name('article');
    Route::get('blog/category/{id}/{slug}', [ContentController::class, 'category'])->name('category');



});


/*
|--------------------------------------------------------------------------
| Rotas de Cadastro, login e Esqueci a Senha
|--------------------------------------------------------------------------
*/

Route::group([], __DIR__.'/loginRoutes.php');


/*
|--------------------------------------------------------------------------
| Rotas de Usuários Logados
|--------------------------------------------------------------------------
*/

Route::group([], __DIR__.'/userLoggedRoutes.php');


/*
|--------------------------------------------------------------------------
| Rotas Administrativas
|--------------------------------------------------------------------------
*/

Route::group([], __DIR__.'/adminRoutes.php');


/*
|--------------------------------------------------------------------------
| Rota de Sistema (não modificar)
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'is_admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

