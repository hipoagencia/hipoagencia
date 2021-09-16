<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PaymentController;


use App\Http\Livewire\User\Home;
use App\Http\Livewire\User\Profile;
use App\Http\Livewire\User\Cart;
use App\Http\Livewire\User\Checkout;



Route::group(['prefix' => 'usuario', 'as' => 'user.'], function () {
    //Rotas protegidas usuário
    Route::group(['middleware' => ['is_user']], function () {


        Route::get('inicio', Home::class)->name('dashboard');
        Route::get('perfil', Profile::class)->name('profile');

        Route::post('cartAdd', [Cart::class, "cartAdd"] )->name('cartAdd');
        Route::get('checkout/{id}/{type}', Checkout::class)->name('checkout');

        /** Pesquisa */
        //Route::get('pesquisa', [SearchController::class, 'index'])->name('pesquisa');


        //Route::get('checkout/{type}/{id}', [PaymentController::class, 'index'])->name('checkout');
        //Route::get('checkout/{type}/{id}',Recurrent::class)->name('checkout');
        Route::get('thanks', [PaymentController::class, 'thanks'])->name('checkout.thanks');



    });
});
