<?php

use App\Http\Controllers\LinkController;
use App\Models\Link;
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

Route::redirect('/', '/links');

Route::controller(LinkController::class)->group(function () {

    Route::get('/links', 'index')->name('links.index');
    Route::get('/links/create', 'create')->name('links.create');
    Route::post('/links', 'store')->name('links.store');
});

Route::get('/{link:hook}', fn(Link $link) => redirect($link->url, 301));
