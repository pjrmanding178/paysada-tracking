<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('Admin/live');
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');

Route::get('/user', function () {
    return view('mobileApp/user/userClient');
})->middleware(['auth', 'verified','rolemanager:user'])->name('user');

Route::get('/driver', function () {
    return view('mobileApp/Driver/mapStart');
})->middleware(['auth', 'verified','rolemanager:driver'])->name('driver');

//PROTOTYPE//

//User//
Route::get('/trip-detail', function(){
    return view ('mobileApp/user/tripDetail');
})->middleware(['auth', 'verified','rolemanager:user'])->name('user');

Route::get('/see-map', function(){
    return view ('mobileApp/user/seemap');
})->middleware(['auth', 'verified','rolemanager:user'])->name('user');

Route::get('/history-rides', function(){
    return view ('/mobileApp/user/historyRides');
})->middleware(['auth', 'verified','rolemanager:user'])->name('user');

//Admin//

Route::get('/admin-user', function(){
    return view ('Admin/user');
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');

Route::get('/admin-drivers', function(){
    return view ('Admin/driver');
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');

Route::get('/admin-transactions', function(){
    return view ('Admin/transactions');
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');


//Driver//

Route::get('driver/map-endLive', function(){
    return view ('mobileApp/Driver/mapEndlive');
})->middleware(['auth', 'verified','rolemanager:driver'])->name('driver');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';