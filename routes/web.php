<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\EnsureAuthenticated;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//-------------------------------------------------------------------------

Route::middleware([EnsureAuthenticated::class])->group(function () {

    Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');

    Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');

    Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');

    Route::get('/expenses/{expense}', [ExpenseController::class, 'show'])->name('expenses.show');

    Route::get('/expenses/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');

    Route::put('/expenses/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');

    Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');

});
