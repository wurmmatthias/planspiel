<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\Admin\AdminCompanyController;
use App\Models\Company;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;




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

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');


    Route::get('/admin/companies', function () {
        // Inline check for admin privileges
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Access denied');
        }

        $companies = Company::all();
        return view('admin.companies', compact('companies'));
    })->name('admin.companies');

    Route::post('/admin/users/promote/{id}', [UserController::class, 'promote'])->name('admin.users.promote');

});

// Test Chatbot Implementation
/*
Route::post('/lernchatbot', function (Request $request) {
    $question = $request->input('question');

    if (!$question) {
        return response()->json(['answer' => 'Bitte gib eine Frage ein.'], 400);
    }

    $response = OpenAI::chat()->create([
        'model' => 'gpt-3.5-turbo',
        'messages' => [
            [
                'role' => 'system',
                'content' => 'Du bist ein Lern-Chatbot für ein IT-Unternehmensplanspiel. Antworte kurz und verständlich auf Fragen zu Themen wie IT-Management, KPIs, Finanzierung, Marketing etc.'
            ],
            [
                'role' => 'user',
                'content' => $question
            ],
        ],
    ]);

    return response()->json([
        'answer' => $response->choices[0]->message->content,
    ]);
})->name('lernchatbot');
*/

// Test Chatbot Implementation
Route::post('/lernchatbot', function (Request $request) {
    $question = $request->input('question');

    if (!$question) {
        return response()->json(['answer' => 'Bitte gib eine Frage ein.'], 400);
    }

    // Dummy-Logik: Gib bei bestimmten Schlüsselwörtern einfache Antworten zurück
    $faq = [
        'kpi' => 'Ein KPI ist eine Leistungskennzahl, z. B. Umsatz oder Kundenzufriedenheit.',
        'it management' => 'IT-Management befasst sich mit der Planung und Steuerung von IT-Systemen.',
        'marketing' => 'Marketing ist die gezielte Vermarktung von Produkten oder Dienstleistungen.',
    ];

    $answer = 'Dies ist eine Testantwort vom lokalen Dummy-Chatbot!';

    foreach ($faq as $keyword => $response) {
        if (stripos($question, $keyword) !== false) {
            $answer = $response;
            break;
        }
    }

    return response()->json([
        'answer' => $answer,
    ]);
})->name('lernchatbot');




require __DIR__.'/auth.php';
