<?php

use App\Http\Controllers\CustomerController;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

/* 
Login sama Register udah ada model, view, dan controller nya, jadi gausah bikin lagi
tinggal modifikasi di view nya aja
*/

Route::get('/', function () {
    return Inertia::render('LandingPages');
});

Route::middleware('auth')->group(function () {
    // Ketika udah login maka akan diarahkan ke dashboard
    // Route::get('/dashboard', function () {
    //     return Inertia::render('Dashboard');
    // })->name('dashboard');

    // Route untuk login
    Route::get('/login', function () {
        return Inertia::render('Auth/Login');
    })->name('login');

    // Route untuk register
    Route::get('/register', function () {
        return Inertia::render('Auth/Register');
    })->name('register');
});
// Route untuk menampilkan data Customers
Route::resource('/customers', CustomerController::class)->name('index', "customers");

require __DIR__ . '/auth.php';
