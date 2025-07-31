<?php

use App\Http\Controllers\Tenant\Admin\AuthorController;
use App\Http\Controllers\Tenant\Admin\BooksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\Admin\DashboardController;

// Prefix: /admin
Route::middleware(['auth']) // apply tenant middleware here
    ->prefix('admin')
    ->name('tenant.admin.')
    ->group(function () {

        // Admin Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Books Resource Routes
        Route::resource('books', BooksController::class);

        Route::resource('authors', AuthorController::class);
        // Route::resource('members', MemberController::class);
    });
