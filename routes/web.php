<?php

// 1. namespaceは不要（routesファイルには通常書きません）
// 2. 必要なライブラリを最初にまとめて宣言する

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- 基本・表示系のルート ---
Route::get('/', function () {
    return view('welcome');
});

Route::get('/quiz', function () {
    return view('question.quiz'); 
});

// --- QuizController系のルート ---
Route::get('/quiz2', [QuizController::class, 'index']);
Route::get('/quiz3', [QuizController::class, 'show']); // quiz3_show か show か、Controllerの設定に合わせて調整してください
Route::get('/quiz4', [QuizController::class, 'quiz4_show']);
Route::get('/quiz5', [QuizController::class, 'login']);
Route::get('/quiz6', [QuizController::class, 'quiz6_show'])->name('quiz6_test');
Route::get('/quiz7', [QuizController::class, 'quiz7_show']);
Route::get('/quiz8', [QuizController::class, 'quiz8_redirect']);
Route::get('/quiz9/{id}', [QuizController::class, 'quiz9_show'])->name('quiz9_test');

Route::get('/quiz10', [QuizController::class, 'quiz10_show'])->name('quiz10_test');
Route::post('/quiz10/store', [QuizController::class, 'quiz10_store'])->name('quiz10_test2');

Route::get('/quiz11/all', [QuizController::class, 'quiz11_show_all'])->name('quiz11_test');
Route::get('/quiz11/get', [QuizController::class, 'quiz11_show_get'])->name('quiz11_get_test');

Route::get('/quiz12/{id}', [QuizController::class, 'quiz12_show'])->name('quiz12_test');
Route::post('/quiz12/update/{id}', [QuizController::class, 'quiz12_update'])->name('quiz12_test2');

// --- UserController(会員)系のルート ---
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/edit', [UserController::class, 'edit']);

// --- 認証系のルート (Auth::routes) ---
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/tasks', [TaskController::class, 'index']);