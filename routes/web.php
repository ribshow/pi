<?php

use App\Http\Controllers\IntegraController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Models\Semester;
use App\Models\Discipline;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/grade', [IntegraController::class, 'grade']);

Route::get('/index', function(){
    return view('pages.index');
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

Route::get('/mural', function () {
    return view('pages.mural');
})->middleware(['auth', 'verified'])->name('mural');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/mural', [IntegraController::class, 'mural'])->name('mural');
    Route::get('/index', [IntegraController::class, 'index'])->name('index');
});

require __DIR__.'/auth.php';
