<?php

use App\Http\Controllers\UrlController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/{url:slug}', [UrlController::class, 'redirect']);
Route::get('/', function () {
    return Inertia::render('Create');
});


// require __DIR__.'/auth.php';
