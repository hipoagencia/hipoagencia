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
    Route::get('especialidade/sistema-nervoso', [ContentController::class, 'specialtyNervous'])->name('specialtyNervous');
    Route::get('especialidade/sistema-urinario', [ContentController::class, 'specialtyUrinary'])->name('specialtyUrinary');
    Route::get('especialidade/cancer-e-tumores', [ContentController::class, 'specialtyCancer'])->name('specialtyCancer');
    Route::get('especialidade/saude-sexual', [ContentController::class, 'specialtySexual'])->name('specialtySexual');

    Route::get('blog', [ContentController::class, 'blog'])->name('blog');
    Route::get('blog/article/{slug}', [ContentController::class, 'article'])->name('article');
    Route::get('blog/category/{id}/{slug}', [ContentController::class, 'category'])->name('category');

    Route::get('/contato', function () {
        return view('web.contact');
    })->name('contact');



     /****************************
     ********   CORAÇÃO   ********
      ****************************/

    Route::get('/especialidade/coracao/arritmia-ventricular', function () {
        return view('web.page.coracao.arritmiaVentricular');
    })->name('page.arritmiaVentricular');

    Route::get('/especialidade/coracao/arritmia-artrial', function () {
        return view('web.page.coracao.arritmiaArtrial');
    })->name('page.arritmiaArtrial');

    Route::get('/especialidade/coracao/avc', function () {
        return view('web.page.coracao.avc');
    })->name('page.avc');

    Route::get('/especialidade/coracao/fibrilacao-arterial', function () {
        return view('web.page.coracao.fibrilacaoArterial');
    })->name('page.fibrilacaoArterial');

});


/*
|--------------------------------------------------------------------------
| Rotas de Cadastro, login e Esqueci a Senha
|--------------------------------------------------------------------------
*/

Route::group([], __DIR__ . '/loginRoutes.php');


/*
|--------------------------------------------------------------------------
| Rotas de Usuários Logados
|--------------------------------------------------------------------------
*/

Route::group([], __DIR__ . '/userLoggedRoutes.php');


/*
|--------------------------------------------------------------------------
| Rotas Administrativas
|--------------------------------------------------------------------------
*/

Route::group([], __DIR__ . '/adminRoutes.php');


/*
|--------------------------------------------------------------------------
| Rota de Sistema (não modificar)
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'is_admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

