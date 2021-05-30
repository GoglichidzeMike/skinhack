<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;


//some public routes

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/quiz', [HomeController::class,'quiz'])->name('quiz');
Route::post('/quiz', [HomeController::class,'quiz_store']);


//dashboard route
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');


// TODO: will have assessment controllers here
Route::get('/dashboard/assessment', [AssessmentController::class, 'index'])->name('assessment.index');
Route::post('/dashboard/assessment/{id}', [AssessmentController::class, 'destroy'])->name('assessment.destroy');
Route::get('/dashboard/assessment/export', [AssessmentController::class, 'export'])->name('assessment.export');
Route::get('/dashboard/assessment/{id}', [AssessmentController::class, 'show'])->name('assessment.show');


// contact controllers
Route::get('/dashboard/leads', [LeadController::class, 'index'])->name('lead.dashboard')->middleware('auth');
Route::post('/contact', [LeadController::class,'store'])->name('contact');
Route::post('/contact/leads/{id}', [LeadController::class, 'destroy'])->name('lead.destroy')->middleware('auth');
Route::get('/leads/export', [LeadController::class, 'exportCsv'])->name('lead.export')->middleware('auth');
Route::get('/dashboard/leads/{id}', [LeadController::class, 'show'])->name('lead.show')->middleware('auth');

//Auth routes
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);
Route::post('/logout', [LogoutController::class,'store'])->name('logout');