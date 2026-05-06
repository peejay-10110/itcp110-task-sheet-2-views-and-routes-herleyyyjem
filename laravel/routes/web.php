<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// 1. Home
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// 2. About Me
Route::get('/about', [PortfolioController::class, 'about'])->name('about');

// 3. Education
Route::get('/education', [PortfolioController::class, 'education'])->name('education');

// 4. Services
Route::get('/services', [PortfolioController::class, 'services'])->name('services');

// 5. Projects
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

// 6. Skills
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');

// 7. Contact
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// 8. Grades
Route::get('/grades', [PortfolioController::class, 'grades'])->name('grades');

// 9. Journal
Route::get('/journal', [PortfolioController::class, 'journal'])->name('journal');

// 10. The fix for your error (TEST-Sync detail page)
Route::get('/project/test-sync', [PortfolioController::class, 'testSync'])->name('testsync');
