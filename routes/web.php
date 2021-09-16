<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Web\PaymentController;
use Spatie\Newsletter\NewsletterFacade;
use App\Http\Controllers\Web\UserController as UserControllerWeb;
use App\Http\Controllers\Web\SearchController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserRoleController;

use App\Http\Livewire\User\Home;
use App\Http\Livewire\User\Profile;
use App\Http\Livewire\User\Cart;
use App\Http\Livewire\User\Checkout;


/*
|--------------------------------------------------------------------------
| Rotas do site sem estar logado
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('web.home');
});

Route::get('/teste', function () {
    return view('web.teste');
})->name('web.teste');

//Rota Newsletter
Route::post('newsletter-store', [\App\Http\Controllers\Web\NewsletterController::class, 'store'])->name('newsletter.store');








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

