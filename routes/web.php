<?php

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\HerolistController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/',[WebsiteController::class,'FullWebsiteData'])->name('Website');
Route::get('/mydashboard',[DashboardController::class,'dashboard'])->name('mydashboard');

Route::get('/allwebsitedata',[DashboardController::class,'listofwebsitedata'])->name('listofwebsitedata');
Route::get('/saveform',[DashboardController::class,'empform'])->name('empform');
Route::post('/gradesave',[DashboardController::class,'gradesave'])->name('gradesave');
Route::get('/expertiselist',[HerolistController::class,'expertiselist'])->name('expertiselist');
Route::get('/heroform',[HerolistController::class,'heroform'])->name('heroform');
