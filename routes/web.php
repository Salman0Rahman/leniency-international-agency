<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use App\Livewire\Pages\Companies;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\FormPage;
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/companies', Companies::class)->name('companies');
Route::get('/form', FormPage::class)->name('form');
Route::get('/contact', Contact::class)->name('contact');

Route::prefix('admin')->group(function () {
    Route::get('/login', Login::class)->middleware('guest')->name('login');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');

        Route::post('/logout', function () {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();

            return redirect()->route('login');
        })->name('logout');
    });
});
