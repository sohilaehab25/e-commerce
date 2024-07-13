<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('/')->group(function () {

Route::get('home', [frontend::class, 'index'])->name('frontend.index');
Route::get('about', [frontend::class, 'about'])->name('frontend.about');
Route::get('blog-details', [frontend::class, 'blogDetails'])->name('frontend.blogDetails');
Route::get('blog', [frontend::class, 'blog'])->name('frontend.blog');
Route::get('checkout', [frontend::class, 'checkOut'])-> name('frontend.checkOut');
Route::get('contact', [frontend::class, 'contact']) -> name('frontend.contact');
Route::get('shop-details', [frontend::class, 'shopDetails'])->name('frontend.shopdetails');
Route::get('shop', [frontend::class, 'shop'])->name('frontend.shop');
Route::get('shoppingCart', [frontend::class, 'shoppingCart'])->name('frontend.shoppingCart');

});


require __DIR__.'/auth.php';
