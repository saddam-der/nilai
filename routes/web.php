<?php

use App\Http\Controllers\Voyager\MuridController;
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

Route::get('/mapel/Home', function () {
    return view('mapel/Home');
});

Route::get('/mapel/Siswa', function () {
    return view('mapel/Siswa');
});

Route::get('/', function () {
    return view('landing');
});

Route::get('admin/export', '\App\Http\Controllers\Voyager\MuridController@export');
Route::get('admin/export_pdf', '\App\Http\Controllers\Voyager\MuridController@export_pdf');
// Route::get('/users_server_side', [MuridController::class, 'getAllUserServerSide']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('murid','\App\Http\Controllers\Voyager\MuridController@index')->middleware('admin.user');
    // Route::get('getAllUserServerSide','\App\Http\Controllers\Voyager\MuridController@getAllUserServerSide')->middleware('admin.user');
});

// Route::group(['prefix' => 'mapel'], function () {
//     Voyager::routes();
// });
