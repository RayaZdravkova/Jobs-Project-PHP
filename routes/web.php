<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompanyController;

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

Route::get('/', [JobController::class, 'jobs'])->name('job');

Route::get('/job/{id}',[JobController:: class, 'show' ])->name('show');
Route::get('/cities',[CityController:: class, 'allcities' ])->name('cities');
Route::get('/companies',[CompanyController:: class, 'allcompanies' ])->name('companies');
