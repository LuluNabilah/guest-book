<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin', //admin/tamu =>URL
    'as' => 'admin.'//route(admin.) => nama

], function () {

    //guestbook.test/admin
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']) -> name('index');

    //guestbook.test/admin/dashboard -> route ('admin.dashboard')
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

});
