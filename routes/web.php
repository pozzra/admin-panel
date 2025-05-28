<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/manage-admin', function () {
    return view('/Admin.index');
})->middleware(['auth', 'verified'])->name('admin.manage');

Route::get('/manage-products', function () {
    return view('/Products.index');
})->middleware(['auth', 'verified'])->name('products.index');

Route::get('/manage-slider', function () {
    return view('/components.slider');
})->middleware(['auth', 'verified'])->name('slider');

Route::get('/manage-orders', function () {
    return view('/Products.orders');
})->middleware(['auth', 'verified'])->name('products.orders');

Route::get('/manage-slider', function () {
    return view('/components.slider');
})->middleware(['auth', 'verified'])->name('slider');


// // route 
// Route::get('/manage-admin', [ProductController::class, 'index'])->name('Admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::post('/lang-switch', function () {
    session(['lang' => request('lang')]);
    return back();
})->name('lang.switch');

require __DIR__.'/auth.php';
