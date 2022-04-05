<?php

    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ReservationController;
    use Backpack\CRUD\app\Http\Controllers\AdminController;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;

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

    Auth::routes();

    Route::get('/admin', [AdminController::class, 'dashboard']);

    Route::get('/', [LoginController::class, 'showLoginForm']);

//Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('Auth');


    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        //https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller
        Route::resource('reservation', ReservationController::class)->names(
            [
                'create' => 'reservation.build',
                'store'  => 'reservation.store',
                'show'   => 'reservation.show',
            ]
        );
    });






