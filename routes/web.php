<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ContentController;


/*
|--------------------------------------------------------------------------
| Rotas do site sem estar logado
|--------------------------------------------------------------------------
*/


Route::group(['as' => 'web.'], function () {

//    Route::get('/', function () {
//        return view('web.construction');
//    })->name('construction');

    Route::get('/', [ContentController::class, 'home'])->name('home');


    Route::get('/clientes', [ContentController::class, 'clients'])->name('clients');

    Route::get('/sobre', function () {
        return view('web.about');
    })->name('about');

    Route::get('/website', [ContentController::class, 'website'])->name('website');
    Route::get('/trafego-pago', [ContentController::class, 'trafic'])->name('trafic');
    Route::get('/midias-sociais', [ContentController::class, 'social'])->name('social');
    Route::get('/identidade-visual', [ContentController::class, 'identity'])->name('identity');
    Route::get('/sistemas-web', [ContentController::class, 'system'])->name('system');

    Route::get('/projeto', [ContentController::class, 'project'])->name('project');
    Route::get('/projetos', [ContentController::class, 'projects'])->name('projects');


    Route::get('blog', [ContentController::class, 'blog'])->name('blog');
    Route::get('blog/pesquisa', [ContentController::class, 'search'])->name('search');
    Route::get('blog/artigo/{slug}', [ContentController::class, 'article'])->name('article');
    Route::get('blog/categoria/{id}/{slug}', [ContentController::class, 'category'])->name('category');

    Route::get('/contato', function () {
        return view('web.contact');
    })->name('contact');

    Route::post('/sendMail', [ContentController::class, 'sendMail'])->name('sendMail');

    Route::get('/obrigado', function () {
        return view('web.thanks');
    })->name('thanks');

    Route::get('/obrigado-newsletter', function () {
        return view('web.thanksNews');
    })->name('thanksNews');

    Route::get('politica-de-privacidade', [ContentController::class, 'privacy'])->name('privacy');
    Route::get('termos-de-uso', [ContentController::class, 'terms'])->name('terms');

    Route::get('/test', function () {
        var_dump(env('NOCAPTCHA_SECRET'), env('NOCAPTCHA_SITEKEY'));
    })->name('test');




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

