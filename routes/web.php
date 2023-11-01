<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AhliController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\rumahController;
use App\Http\Controllers\borangController;

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

Route::get('/', [loginController::class,'index'])->name('login')->middleware('guest');
Route::get('/login', [loginController::class,'index'])->name('login')->middleware('guest');
Route::post('login', [loginController::class,'authenticate']);
// Route::get('/register', [loginController::class,'viewreg']);
Route::get('/register', function () {   return view('login/register');   });
Route::get('/1', function () {   return view('register');   });
Route::post('/register', [loginController::class, 'store']);
Route::post('/logout', [loginController::class,'logout']);

//home
Route::get('/dashboard', function () {
    if (Auth::check()) {
        if (Auth::user()->role === '1') {
            // Action for admin
            return view('dashboard');
            // return redirect('/admin/dashboard');
        } else {
            // Action for regular user
            return view('dashboard');
            // return redirect('/user/dashboard');
        }
    } else {
        // Action for guest
        return redirect()->route('login');
    }
});
Route::get('/home2', function () {
    return view('home');
});

//admin
Route::group(['middleware' => ['auth', 'admin']], function() {
    // admin routes here
    //dasboard
    Route::get('/admin/dashboard', function () {
        return view('home')->name('admin.dashboard');
    });
});

//user
Route::group(['middleware' => ['auth', 'user']], function() {
    // user routes here
    //dasboard
    Route::get('/user/dashboard', function () {
        return view('home')->name('user.dashboard');
    });
    
    //pasal rumah
    Route::get('/rumah', [rumahController::class,'view']);
    Route::get('/edit-rumah', [rumahController::class,'edit']);
    Route::post('/update-rumah', [rumahController::class, 'update']);

    //ahli
    Route::get('/ahli', [AhliController::class,'view']);
    Route::get('/tambah-ahli', function () { return view('AIR/tambahAIR'); });
    Route::post('/tambah-ahli', [AhliController::class,'store']);
    Route::post('/edit-ahli', [AhliController::class,'edit']);
    // Route::get('/edit-ahli/{id}', [AhliController::class,'edit']);
    Route::post('/update-ahli', [AhliController::class,'update']);
    Route::delete('/delete-ahli/{id}', [AhliController::class, 'destroy'])->name('delete');

    //bil
});

