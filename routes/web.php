<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

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
    return view('item', ['name' => 'TESTRTTTTTT']);
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
    return view('add-advert');
})->name('userAddItem');

Route::get('/user/show/items', [ImageUploadController::class,'showUserAdverts'])->name('userShowItems');

//For adding an image
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-advert',[ImageUploadController::class,'storeAdvert'])
    ->name('advert.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');

