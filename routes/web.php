<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReporterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Company
    Route::get('/company', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/company/leader', [CompanyController::class, 'leader'])->name('companies.leader');
    Route::get('/company/bank', [CompanyController::class, 'bank'])->name('companies.bank');

    // Media
    Route::get('/media', [MediaController::class, 'index'])->name('medias.index');
    Route::get('/media/add', [MediaController::class, 'add'])->name('medias.add');

    // Reporter
    Route::get('/reporter', [ReporterController::class, 'index'])->name('reporters.index');
    Route::get('/reporter/add', [ReporterController::class, 'add'])->name('reporters.add');

    // News
    Route::get('news', [NewsController::class, 'index'])->name('news.index');

});

require __DIR__.'/auth.php';
