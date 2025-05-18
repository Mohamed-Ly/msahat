<?php

use Illuminate\Support\Facades\Route;
use App\Models\Sitting;
use App\Models\Sitting_contact;

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
    $sitting = Sitting::first();
    $Sitting_contact = Sitting_contact::all();
    return view('index',compact('sitting','Sitting_contact'));
})->name('index');



Route::group([
    'prefix' => LaravelLocalization::setLocale(),
], function () {
Auth::routes(['register' => false]);
});

Route::post('contact/send', [App\Http\Controllers\admin\Contact\ContactController::class, 'store'])->name('contact.send');



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('Admin_Users', App\Http\Controllers\admin\Users\UsersController::class);
        Route::resource('Admin_Profile', App\Http\Controllers\admin\Profile\ProfileController::class);
        Route::resource('Admin_Contact', App\Http\Controllers\admin\Contact\ContactController::class);
        Route::resource('sitting_contact', App\Http\Controllers\admin\Sittings\SittingsContactController::class);
        Route::resource('Admin_RoleAndPerimissions', App\Http\Controllers\admin\RolesAndPermissions\RolesAndPermissionsController::class);
        Route::post('/contact', [App\Http\Controllers\admin\Contact\ContactController::class, 'submitForm'])->name('submit');
        Route::get('/sitting/public', [App\Http\Controllers\admin\Sittings\SittingsController::class, 'index'])->name('sitting.public');
        Route::post('/sitting/public', [App\Http\Controllers\admin\Sittings\SittingsController::class, 'store'])->name('sitting.public.store');


    });

