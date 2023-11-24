<?php

use App\Http\Controllers\VclaimController;
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

Route::get('vclaim/diagnosa/{code}', [VclaimController::class, 'getDiagnosa']);
Route::get('vclaim/poli/{code}', [VclaimController::class, 'getPoli']);
Route::get('vclaim/provinsi', [VclaimController::class, 'getProvinsi']);
Route::get('vclaim/kabupaten/{code}', [VclaimController::class, 'getKabupaten']);
Route::get('vclaim/peserta/{number}', [VclaimController::class, 'getPeserta']);
Route::get('vclaim/rujukan/{number}', [VclaimController::class, 'getRujukan']);
