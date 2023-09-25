<?php

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

Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    Route::group([
        'as' => 'admin.',
        'namespace' => 'Admin',
        'middleware' => 'auth:admin'
    ], function(){

        Route::post('users/{user}','userController@changeState')->name('users.change.state');
        Route::resource('users', 'userController');
        
        Route::post('cars/{car}','CarController@changeState')->name('cars.change.state');
        Route::resource('cars', 'CarController');
        Route::get('car/new', 'CarController@new')->name('cars.new');
        
        Route::post('homes/{home}','HomeController@changeState')->name('homes.change.state');
        Route::resource('homes', 'HomeController');
        Route::get('home/new', 'HomeController@new')->name('homes.new');

        Route::post('shops/{shop}','ShopController@changeState')->name('shops.change.state');
        Route::resource('shops', 'ShopController');
        Route::get('shop/new', 'ShopController@new')->name('shops.new');

        Route::post('lands/{land}','LandController@changeState')->name('lands.change.state');
        Route::resource('lands', 'LandController');
        Route::get('land/new', 'LandController@new')->name('lands.new');
        
        Route::post('jobs/{job}','jobController@changeState')->name('jobs.change.state');
        Route::resource('jobs', 'JobController');
        Route::get('job/new', 'JobController@new')->name('jobs.new');

        Route::post('mobiles/{mobile}','MobileController@changeState')->name('mobiles.change.state');
        Route::resource('mobiles', 'MobileController');
        Route::get('mobile/new', 'MobileController@new')->name('mobiles.new');

        Route::post('generals/{general}','GeneralController@changeState')->name('generals.change.state');
        Route::resource('generals', 'GeneralController');
        Route::get('general/new', 'GeneralController@new')->name('generals.new');

        Route::resource('contacts', 'ContactController');

    });
});
