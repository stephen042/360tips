<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::view('/', 'home.index')->name('home');
    Route::view('/home', 'home.index')->name('home');
    Route::view('/login',  'auth.login')->name('login');
    Route::view('/funding',  'home.funding')->name('funding');
    Route::view('/faq',  'home.faq')->name('faq');
    Route::view('/contact',  'home.contact')->name('contact');
    Route::view('/terms',  'home.terms')->name('terms');
    Route::view('/forgot-password',  'auth.forgot-password')->name('forgot_password');
    Route::get('/password-reset/{email}/{token}',  [UserController::class, 'password_rest'])->name('password_reset');
    Route::post('/password-reset/{email}/{token}',  [UserController::class, 'password_rest'])->name('password_reset_post');
    Route::view('/register', 'auth.register')->name('register');

    // Home Routes 

});


Route::prefix('users')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', [UserController::class, 'users'])->name('user_dashboard');
        Route::get('/deposit', [UserController::class, 'deposit'])->name('user_deposit');
        Route::get('/sub_deposit', [UserController::class, 'sub_deposit'])->name('user_sub_deposit');
        Route::get('/trade', [UserController::class, 'trade'])->name('user_trade');
        Route::get('/user-swap', [UserController::class, 'user_swap'])->name('user_swap');
        Route::get('/user-crypto-wallets', [UserController::class, 'user_crypto_wallets'])->name('user_crypto_wallets');
        Route::get('/withdraw', [UserController::class, 'withdraw'])->name('user_withdraw');
        Route::get('/ai-plans', [UserController::class, 'ai_plans'])->name('user_ai_plans');
        // Route::put('/ai-plans', [UserController::class, 'ai_plans'])->name('user_ai_plans_put');
        Route::get('/signal-plans', [UserController::class, 'signal_plans'])->name('user_signal_plans');
        Route::get('/status', [UserController::class, 'status'])->name('user_status');
        Route::get('/trade-history', [UserController::class, 'trade_history'])->name('user_trade_history');
        Route::get('/deposit-history', [UserController::class, 'deposit_history'])->name('user_deposit_history');
        Route::get('/withdraw-history', [UserController::class, 'withdraw_history'])->name('user_withdraw_history');
        Route::get('/stake', [UserController::class, 'stake'])->name('user_stake');
        Route::get('/realEstate', [UserController::class, 'realEstate'])->name('user_realEstate');
        Route::get('/account-settings', [UserController::class, 'account_settings'])->name('account_settings');
        Route::post('/account-settings', [UserController::class, 'account_settings'])->name('account_settings_update');
        Route::get('/security-settings', [UserController::class, 'security_settings'])->name('security_settings');
    });
});

Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::middleware('admin')->group(function () {
            Route::get('/', [AdminController::class, 'admin'])->name('admin_dashboard');
            Route::get('/edit-user/{user}', [AdminController::class, 'edit_user'])->name('edit_user');
            Route::post('/edit-user/{user}', [AdminController::class, 'edit_user'])->name('edit_user_post');
            Route::get('/edit-trade/{user}/{trades}', [AdminController::class, 'edit_trade'])->name('edit_trade');
            Route::get('/admin-ai-trade/{user}', [AdminController::class, 'admin_ai_trade'])->name('admin_ai_trade');
            Route::get('/admin-wallets', [AdminController::class, 'admin_wallets'])->name('admin_wallets');
            Route::post('/admin-wallets', [AdminController::class, 'admin_wallets'])->name('admin_wallets_post');

            Route::get('/create-ai-plan', [AdminController::class, 'create_ai_plan'])->name('create_ai_plan');
            Route::delete('/create-ai-plan', [AdminController::class, 'delete_ai_plan'])->name('delete_ai_plan');

            Route::get('/create-signal-plan', [AdminController::class, 'create_signal_plan'])->name('create_signal_plan');
            Route::delete('/create-signal-plan', [AdminController::class, 'delete_signal_plan'])->name('delete_signal_plan');

            Route::get('/create-status-plan', [AdminController::class, 'create_status_plan'])->name('create_status_plan');
            Route::delete('/create-status-plan', [AdminController::class, 'delete_status_plan'])->name('delete_status_plan');

            Route::get('/profile-settings', [AdminController::class, 'profile_settings'])->name('profile_settings');
            Route::post('/profile-settings', [AdminController::class, 'profile_settings'])->name('profile_settings_update');

            Route::delete('/{user}', [AdminController::class, 'delete_user'])->name('delete_user');
        });
    });
});
