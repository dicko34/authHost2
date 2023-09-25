<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

//Auth::routes();
Route::get('/', 'HomeController@index')->middleware('verified')->name('home');
Route::post('search', 'HomeController@search')->middleware('verified')->name('search');

// Vendor routes

Route::prefix('vendor')->group(function () {
    Route::get('/', 'Users\Vendor\VendorController@index')->name('vendor.dashboard');
    Route::any('/gallery/{id}', 'Users\Vendor\VendorController@gallery')->name('vendor.gallery');
});

Route::group([
    'as' => 'vendor.',
    'namespace' => 'Vendor',
], function () {

    Route::post('cars', 'CarController@store')->name('cars.store');

    Route::post('generals', 'GeneralController@store')->name('generals.store');

    Route::post('homes', 'HomeController@store')->name('homes.store');

    Route::post('jobs', 'JobController@store')->name('jobs.store');

    Route::post('lands', 'LandController@store')->name('lands.store');

    Route::post('mobiles', 'MobileController@store')->name('mobiles.store');

    Route::post('shopes', 'ShopController@store')->name('shopes.store');

    Route::resource('contacts', 'ContactController');
})->middleware('verified');
//Auth::routes();
Route::get('/login', function () {
    return view('vendor.login');
})->name('login');

Route::get('/register', function () {
    return view('vendor.register');
})->name('register');

Route::get('/contact', function () {
    return view('vendor.contact');
})->name('contact');


Route::get('/cars', 'Site\CarController@index')->name('car.index');
Route::any('/cars/search', 'Site\CarController@search')->name('cars.search');
Route::get('/car/product/{car}', 'Site\CarController@product')->name('car.product');
Route::get('/car/add', 'Site\CarController@add')->name('car.add');
Route::get('get-car-models/{carCompany}', 'Site\CarController@getCarModels');

Route::get('/choseAdd', 'Site\CarController@choseAdd')->name('choseAdd');

Route::get('/homes', 'Site\HomeController@index')->name('home.index');
Route::any('/homes/search', 'Site\HomeController@search')->name('homes.search');
Route::get('/home/product/{home}', 'Site\HomeController@product')->name('home.product');
Route::get('/home/add', 'Site\HomeController@add')->name('home.add');


Route::get('/lands', 'Site\LandsController@index')->name('land.index');
Route::any('/lands/search', 'Site\LandsController@search')->name('lands.search');
Route::get('/land/product/{land}', 'Site\LandsController@product')->name('land.product');
Route::get('/land/add', 'Site\LandsController@add')->name('land.add');

Route::get('/jobs', 'Site\JobsController@index')->name('job.index');
Route::any('/jobs/search', 'Site\JobsController@search')->name('jobs.search');
Route::get('/job/product/{job}', 'Site\JobsController@product')->name('job.product');
Route::get('/job/add', 'Site\JobsController@add')->name('job.add');

Route::get('/mobiles', 'Site\MobilesController@index')->name('mobile.index');
Route::any('/mobiles/search', 'Site\MobilesController@search')->name('mobiles.search');
Route::get('/mobile/product/{mobile}', 'Site\MobilesController@product')->name('mobile.product');
Route::get('/mobile/add', 'Site\MobilesController@add')->name('mobile.add');

Route::get('/generals', 'Site\GeneralController@index')->name('general.index');
Route::any('/generals/search', 'Site\GeneralController@search')->name('generals.search');
Route::get('/general/product/{general}', 'Site\GeneralController@product')->name('general.product');
Route::get('/general/add', 'Site\GeneralController@add')->name('general.add');

Route::get('/shopes', 'Site\ShopController@index')->name('shop.index');
Route::any('/shopes/search', 'Site\ShopController@search')->name('shopes.search');
Route::get('/shop/product/{shop}', 'Site\ShopController@product')->name('shop.product');
Route::get('/shop/add', 'Site\ShopController@add')->name('shop.add');
Auth::routes(['verify' => true]);
