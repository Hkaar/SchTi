<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@welcome')->name('/');

    Route::prefix('about')->group(function () {
        Route::get('/', 'HomeController@about')->name('about');
        Route::get('facilities', 'HomeController@facilities')->name('about.facilities');
        Route::get('majors', 'HomeController@majors')->name('about.majors');
        Route::get('yayasan', 'HomeController@yayasan')->name('about.yayasan');
        Route::get('staff', 'HomeController@staff')->name('about.staff');
    });

    Route::prefix('curriculum')->group(function () {
        Route::get('subjects', 'HomeController@subjects')->name('curriculum.subjects');
        Route::get('schedule', 'HomeController@schedule')->name('curriculum.schedule');
    });

    Route::prefix('public-relations')->group(function () {
        Route::get('/', 'HomeController@publicRelations')->name('public-relations');
        Route::get('alumni', 'HomeController@alumni')->name('public-relations.alumni');
        Route::get('partnerships', 'HomeController@partnerships')->name('public-relations.partnerships');
        Route::get('industry', 'HomeController@industry')->name('public-relations.industry');
    });

    Route::prefix('student-affairs')->group(function () {
        Route::get('/', 'HomeController@studentAffairs')->name('student-affairs');
        Route::get('awards', 'HomeController@awards')->name('student-affairs.awards');
        Route::get('clubs', 'HomeController@clubs')->name('student-affairs.clubs');
        Route::get('counsellor', 'HomeController@counsellor')->name('student-affairs.counsellor');
        Route::get('student-org', 'HomeController@studentOrg')->name('student-affairs.student-org');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('home', 'HomeController@home')->name('home');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@show')->name('login');
        Route::post('login', 'LoginController@login')->name('login.handle');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', 'LogoutController@perform')->name('logout');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::group(['prefix' => 'manage', 'middleware' => ['auth', 'can:dashboard-access']], function () {
        Route::group(['middleware' => 'can:admin'], function () {
            Route::resource('users', 'UserController')->names('admin.users');

            Route::get('settings', 'SettingController@edit')->name('admin.settings.index');
            Route::put('settings', 'SettingController@update')->name('admin.settings.update');

            Route::get('roles', 'RoleController@index')->name('admin.roles.index');
            Route::get('roles/{id}', 'RoleController@show')->name('admin.roles.show');
            Route::get('roles/{id}/edit', 'RoleController@edit')->name('admin.roles.edit');
            Route::put('roles/{id}', 'RoleController@update')->name('admin.roles.update');
        });

        Route::group(['middleware' => 'can:admin|can:operator'], function () {
            Route::resource('schools', 'SchoolController')->names('admin.schools');
            Route::resource('cities', 'CityController')->names('admin.cities');
            Route::resource('districts', 'DistrictController')->names('admin.districts');
            Route::resource('groups', 'GroupController')->names('admin.groups');
            Route::resource('partnerships', 'PartnerShipController')->names('admin.partnerships');
        });

        Route::group(['middleware' => 'can:admin|can:student-counselor'], function () {
            Route::resource('student-attendance', 'StudentAttendanceController')->names('admin.student-attendance');
        });
    });
});
