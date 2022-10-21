<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\HeaderContentController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);
// backend controller starts from here

//header content
Route::get('/headercontent', [HeaderContentController::class, 'index'])->name('headercontent');
Route::get('/headercontent/create', [HeaderContentController::class, 'createcontent'])->name('headercontent.create');

//About content
Route::get('/aboutcontent', [AboutController::class, 'index'])->name('aboutcontent');
Route::get('/aboutcontent/create', [AboutController::class, 'createcontent'])->name('aboutcontent.create');