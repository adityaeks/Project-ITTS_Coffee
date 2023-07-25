<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuggestionController;
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

Route::get('/', function () {
    return view('welcome');
});


// start route ari home
Route::get('home', [HomeController::class, 'index'])->name('home');
// end route ari home

// start route ari suggestion
Route::post('/suggestion', 'SuggestionController@store')->name('suggestion.store');
Route::resource('suggestion', SuggestionController::class);
// end route ari suggestion
Route::get('products/food', [ProductController::class, 'food'])->name('products.food');
Route::get('products/drink', [ProductController::class, 'drink'])->name('products.drink');
Route::resource('products', ProductController::class);

Route::get('exportExcel', [ProductController::class, 'exportExcel'])->name('products.exportExcel');

// coba

Route::get('/upload-example', function() {
    return view('upload_example');
});

Route::post('/upload-example', function(Request $request) {
    $path = $request->file('avatar')->store('public');
    return $path;
})->name('upload-example');


