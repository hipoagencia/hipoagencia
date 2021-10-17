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
        return view('web.home');
    })->name('home');

    Route::get('/blog', function () {
        return view('web.blog');
    })->name('blog');

    Route::get('article/{slug}', [ContentController::class, 'article'])->name('article');

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

