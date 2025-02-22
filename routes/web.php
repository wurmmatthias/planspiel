<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\Admin\AdminCompanyController;
use App\Models\Company;



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
});

Route::middleware(['auth'])->group(function () {
    Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/company', [CompanyController::class, 'store'])->name('company.store');

    Route::get('/company/join', [CompanyController::class, 'joinForm'])->name('company.join.form');
    Route::post('/company/join', [CompanyController::class, 'join'])->name('company.join');

    Route::post('/company/leave', [CompanyController::class, 'leave'])->name('company.leave');

    //Help and learning
    Route::view('/help', 'help')->name('help');
    Route::view('/learn', 'learn')->name('learn');
    // Dynamic route for individual learning topics
    Route::get('/learn/{slug}', [LearningController::class, 'topic'])->name('learn.topic');

    Route::view('/reports', 'reports')->name('reports');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        // Inline check for admin privileges
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Access denied');
        }

        $companies = Company::all();
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/companies', function () {
        // Inline check for admin privileges
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Access denied');
        }

        $companies = Company::all();
        return view('admin.companies', compact('companies'));
    })->name('admin.companies');
});


require __DIR__.'/auth.php';
