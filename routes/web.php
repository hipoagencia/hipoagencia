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
| Rotas de Login
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login-do', [AuthController::class, 'login'])->name('login.do');
Route::get('/sair', [AuthController::class, 'logout'])->name('logout');

Route::get('/recurar-senha', [AuthController::class, 'recoverPassword'])->name('recoverPassword');
Route::post('/recuperar-senha-sendmail', [AuthController::class, 'recoverPasswordSendMail'])->name('recover-Password-SendMail');
Route::get('/nova-senha', [AuthController::class, 'newPassword'])->name('newPassword');

/*
|--------------------------------------------------------------------------
| Rotas Administrativas
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    route::group(['middleware' => ['is_admin']], function () {

        Route::get('dashboard', [AuthController::class, 'dashboardAdmin'])->name('dashboard');

        //Rotas de Usuários
        Route::resource('users', UserController::class);
        Route::get('user/logs', [UserController::class, 'log'])->name('users.log');

        //Rotas de Produtos
        Route::post('products/image-order', [ProductController::class, 'imageOrder'])->name('products.imageOrder');
        Route::post('products/image-set-cover', [ProductController::class, 'imageSetCover'])->name('products.imageSetCover');
        Route::delete('products/remove-cover', [ProductController::class, 'imageRemove'])->name('products.imageRemove');
        Route::resource('products', ProductController::class);

        //Rotas de Categorias
        Route::resource('categories', CategoriesController::class);

        //Rotas de Posts
        Route::resource('posts', PostController::class);

        //Rotas de Conteúdos
        Route::resource('content', ContentController::class);

        //SiteMap
        Route::get('site-map', function () {
            \Spatie\Sitemap\SitemapGenerator::create(env('app_url'))->writeToFile(public_path('sitemap.xml'));

            //Retorna para a Dashboard com mensagem de confirmação
        });

        //Retorna todos os logs do usuário
//        Route::get('log', function () {
//            //activity()->log('Look mum, I logged something');
//            dd(\Spatie\Activitylog\Models\Activity::where('causer_id', \Illuminate\Support\Facades\Auth::user()->id)->get());
//        });

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


/*
|--------------------------------------------------------------------------
| Rotas de Usuários Logados
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'usuario', 'namespace' => 'User', 'as' => 'user.'], function () {
    //Rotas protegidas usuário
    route::group(['middleware' => ['is_user']], function () {

        Route::get('inicio', [AuthController::class, 'dashboardUser'])->name('dashboard');

        Route::get('perfil', [UserControllerWeb::class, 'edit'])->name('profile');
        Route::put('perfil-update', [UserControllerWeb::class, 'update'])->name('profile.update');

        /** Checkout */
        Route::get('checkout/{product}', [PaymentController::class, 'checkout'])->name('checkout');

    });
});

/*
|--------------------------------------------------------------------------
| Rota de Sistema (não modificar)
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'is_admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

