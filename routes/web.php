<?php

use App\Http\Controllers\HourController;
use App\Http\Controllers\IntegraController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Models\Semester;
use App\Models\Discipline;
use App\Models\Hour;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/grade', [HourController::class, 'show_dsm']);
Route::get('/sn', [HourController::class, 'show_sn']);
Route::get('/index', function(){
    return view('pages.index');
});

Route::get('/criar', [IntegraController::class, 'create']);

Route::get('/find', function (){
    $courses = Course::all();
    foreach($courses as $course){
        echo "<h2>$course->id - $course->description</h2><br/>";
        foreach($course->disciplines as $disc)
        {
        echo "$disc->id - $disc->name<br>";
        }
    }
});
Route::get('/hora', [HourController::class, 'dsm']);
Route::get('/fazer', [HourController::class, 'grade'])->name('fazer');
Route::post('/store', [HourController::class, 'store'])->name('store');

Route::get('/horario', function(){
    $horario = Hour::with('course','discipline','room','block','user')->get();
    foreach($horario as $hour)
    {
        echo "<h3>$hour->id - {$hour->course->description}</h3>";
        echo "<p>{$hour->semester->name}";
        echo "<p>$hour->dia</p>";
        echo "<p>$hour->hora</p>";
        echo "<p>{$hour->discipline->name}</p>";
        echo "<p>{$hour->user->name}</p>";
        echo "<p>{$hour->block->block}</p>";
        echo "<p>{$hour->room->name}</p>";
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

Route::get('/debug', function(){
   return view('pages.hora');
});
Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/mural', [IntegraController::class, 'mural'])->name('mural');
    Route::get('/index', [IntegraController::class, 'index'])->name('index');
    Route::post('/mural', [PostController::class, 'store'])->name('mural');
    Route::get('/mural', [PostController::class, 'show'])->name('mural');
    Route::get('/mural/{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::post('/mural/{post}', [PostController::class, 'update'])->name('update');
    Route::get('/mural/{post}', [PostController::class, 'destroy'])->name('delete');
    Route::get('/dash', function(){
        return view('dashboard');
    });
});

require __DIR__.'/auth.php';
