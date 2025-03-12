<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ArrayController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\ParagraphController;
use App\Http\Controllers\MultiplicationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/process-array', [ArrayController::class, 'processArray']);
Route::get('/process-employees', [EmployeeController::class, 'processEmployees']);
Route::get('/process-books', [BookController::class, 'processBooks']);
Route::get('/process-students', [StudentController::class, 'processStudents']);
Route::get('/generate-fibonacci', [FibonacciController::class, 'generateFibonacci']);
// Display the form
Route::get('/multiplication-table', [MultiplicationController::class, 'showForm'])->name('show-mform');

// Generate the table
Route::post('/generate-table', [MultiplicationController::class, 'generateTable'])->name('generate-table');
// Display the form
Route::get('/grade-calculator', [GradeController::class, 'showForm'])->name('show-cform');

// Calculate the grade
Route::post('/calculate-grade', [GradeController::class, 'calculateGrade'])->name('calculate-grade');

Route::get('/paragraph-analyzer', [ParagraphController::class, 'showForm'])->name('show-pform');

// Process the paragraph
Route::post('/process-paragraph', [ParagraphController::class, 'processParagraph'])->name('process-paragraph');