<?php

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

/*
 * Default routes
 */
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/items', function () {
    return view('items');
})->name('items');

Route::get('/item', function () {
    return view('item');
})->name('item');

/*
 * Dashboard routes
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/user/add/item', function () {
    return view('');
})->name('userAddItem');

Route::get('/user/show/items', function () {
    return view('');
})->name('userShowItems');
