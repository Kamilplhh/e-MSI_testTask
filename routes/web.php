<?php

use App\Http\Controllers\ContractorController;
use App\Http\Controllers\DelegationController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/pracownicy', function () {
    return view('pracownicy');
});

Route::get('/faktury', function () {
    return view('faktury');
});

Route::get('/delegacje', [DelegationController::class, 'showData']); 

Route::get('/kontrahenci', [ContractorController::class, 'showData']); 
