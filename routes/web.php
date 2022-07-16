<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\User\ClassController;
use App\Http\Controllers\Mentor\LoginController as MentorLogin;

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
    return view('welcome');
})->name('welcome');



//Socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');


Route::middleware(['auth'])->group(function () {
    //checkout route
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');;
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');;

    //dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    //user dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function () {
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
        Route::get('/class', [ClassController::class, 'index'])->name('class');
        Route::get('/invoice', [UserDashboard::class, 'cetakInvoice'])->name('invoice');
        Route::get('/invoiceDone', [UserDashboard::class, 'cetakInvoiceDone'])->name('invoice-done');

        // Route::get('/{class:slug}', [UserDashboard::class, 'create'])->name('class.create');
    });

    //Admin Dashboard
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function () {
        Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');
        // admin checkout
        Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');
        Route::get('/cetak-pdf', [AdminDashboard::class, 'pdf'])->name('cetak-pdf');
        Route::get('/addMentor', [AdminDashboard::class, 'addMentor'])->name('addMentor');
        Route::get('/form-add', [AdminDashboard::class, 'formAddMentor'])->name('form-add');
        Route::post('/add', [AdminDashboard::class, 'store'])->name('add');
        Route::get('/mentor/edit/{id}', [AdminDashboard::class, 'edit'])->name('edit');
        Route::post('/mentor/update', [AdminDashboard::class, 'update'])->name('update');
        Route::get('/mentor/destroy/{id}', [AdminDashboard::class, 'destroy'])->name('destroy');
    });

    //Mentor Dashboard
    Route::prefix('mentor/dashboard')->namespace('Mentor')->name('mentor.')->group(function () {
        Route::get('/', [MentorLogin::class, 'index'])->name('dashboard');
        Route::get('/form-add', [MentorLogin::class, 'formAdd'])->name('form-add');
        Route::post('/add', [MentorLogin::class, 'store'])->name('add');
        Route::get('/edit/{id}', [MentorLogin::class, 'edit'])->name('edit');
        Route::post('/update', [MentorLogin::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [MentorLogin::class, 'destroy'])->name('destroy');
    });

    //invoice
    Route::get('dashboard/checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('user.checkout.invoice');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
