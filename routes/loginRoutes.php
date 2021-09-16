<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login-do', [AuthController::class, 'login'])->name('login.do');
Route::get('/sair', [AuthController::class, 'logout'])->name('logout');

Route::get('/recurar-senha', [AuthController::class, 'recoverPassword'])->name('recoverPassword');
Route::post('/recuperar-senha-sendmail', [AuthController::class, 'recoverPasswordSendMail'])->name('recover-Password-SendMail');

Route::get('/nova-senha', [AuthController::class, 'newPassword'])->name('newPassword');
Route::post('/nova-senha-do', [AuthController::class, 'newPasswordDo'])->name('newPassword-do');

Route::get('/cadastro', [AuthController::class, 'register'])->name('register');
Route::post('/cadastro-do', [AuthController::class, 'registerDo'])->name('register-do');
