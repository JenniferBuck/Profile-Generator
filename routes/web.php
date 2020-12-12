<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//team routes
Route::post('team/store',[TeamController::class,'store'])->name('team.store');
Route::get('team/{team}/edit',[TeamController::class,'edit'])->name('team.edit');
Route::get('team/{team}',[TeamController::class,'show'])->name('team.show');
Route::patch('team/{team}/update',[TeamController::class,'update'])->name('team.update');
Route::delete('team/{team}/delete',[TeamController::class,'destroy'])->name('team.delete');

//categories
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/{category:name}/members',[CategoryController::class,'show'])->name('category.show');
Route::get('category/{category}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::patch('category/{category}/update',[CategoryController::class,'update'])->name('category.update');
Route::delete('category/{category}/delete',[CategoryController::class,'destroy'])->name('category.delete');

//members routes
Route::get('members',[MemberController::class,'index'])->name('members.index');
Route::get('members/create',[MemberController::class,'create'])->name('members.create');
Route::post('member/store',[MemberController::class,'store'])->name('members.store');
Route::get('member/{member}/edit',[MemberController::class,'edit'])->name('members.edit');
Route::patch('member/{member}/update',[MemberController::class,'update'])->name('members.update');
Route::delete('member/{member}/delete',[MemberController::class,'destroy'])->name('members.delete');



