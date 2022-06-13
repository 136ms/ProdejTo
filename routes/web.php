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
Route::get('/', [ImageUploadController::class,'viewIndex'])->name('index');

Route::get('/page/{id}', [ImageUploadController::class,'viewIndexPage'])->name('indexPage');

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

Route::get('/user/add/item', [ImageUploadController::class,'addAdvert'])->name('userAddItem');

Route::get('/user/show/items', [ImageUploadController::class,'showUserAdverts'])->name('userShowItems');

//For adding an image
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an advert
Route::post('/store-advert',[ImageUploadController::class,'storeAdvert'])
    ->name('advert.store');

//For showing an search result
Route::post('/search-advert',[ImageUploadController::class,'viewIndexSearch'])
    ->name('advert.search');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');

Route::controller(ImageUploadController::class)->group(function(){
    Route::get('image-upload', 'index');
    Route::post('image-upload', 'store')->name('image.store');
});
