<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\HotlistDepotController;
use App\Http\Controllers\HotlistItemController;
use App\Http\Controllers\HotlistSbuController;
use App\Models\HotlistDepot;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/sample', MainController::class);
Route::resource('/depot', HotlistDepotController::class);
Route::resource('/sbu', HotlistSbuController::class);
Route::resource('/item', HotlistItemController::class);
