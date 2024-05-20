<?php

use App\Http\Controllers\IntegraController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Models\Semester;
use App\Models\Discipline;

Route::get('/', function () {
    return view('pages.login');
});

Route::get('/find', function (){
    $courses = Course::all();
    foreach($courses as $course){
        echo "<h2>$course->description</h2><br/>";
        foreach($course->disciplines as $disc)
        {
        echo "$disc->id - $disc->name<br>";
        }
    }
});

Route::get('/relation', function (){
    $semester = Semester::find(1);
    $course = Course::find(1);
    $disciplines = $course->disciplines;
});

Route::get('/dashboard', function () {
    return view('pages.index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', [IntegraController::class, 'index'])->name('index');
    Route::get('/grade', [IntegraController::class, 'grade'])->name('grade');
    Route::get('/mural', [IntegraController::class, 'mural'])->name('mural');
});

require __DIR__.'/auth.php';
