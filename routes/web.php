<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded bmiddlewarey the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Admin dasboard
Route::group([
    'prefix'     => '_admin/dasboard', 
    'controller' => DashboardController::class,
    'middleware' => 'auth.custom'
], function() {
    Route::get('/', 'index')->name('admin.dasboard') ;
});


// Admin product manager