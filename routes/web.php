<?php

use App\Http\Controllers\HourController;
use App\Http\Controllers\IntegraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Models\Semester;
use App\Models\Discipline;
use App\Models\Hour;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\AlertController;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckTeacher;
use Illuminate\Support\Facades\Http;

Route::get('/', [AlertController::class, 'getIndex'])->name('index');

Route::get('/grade', [HourController::class, 'show_dsm'])->name("grade");
Route::get('/index', function () {
    return view('pages.index');
});


Route::delete('/alerts/delete/{id}', [AlertController::class, 'destroy'])
    ->middleware(VerifyCsrfToken::class);

Route::get('/fazer', [HourController::class, 'grade'])->name('fazer');
Route::post('/store', [HourController::class, 'store'])->name('store');

Route::get('/horario', function () {
    $horario = Hour::with('course', 'discipline', 'room', 'block', 'user')->get();
    foreach ($horario as $hour) {
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


// ROTAS PROTEGIDAS PELO MIDDLEWARE CHECKTEACHER
Route::get('/alerts', [AlertController::class, 'index'])
    ->name('alerts.index')
    ->middleware(CheckTeacher::class);
Route::post('/alerts/store', [AlertController::class, 'store'])
    ->name('alerts.store')
    ->middleware(CheckTeacher::class);

Route::get('/chatgeek', [ChatController::class, 'indexGeek'])->name('chat.geek');
Route::delete('/chatgeek/{id}', [AdmController::class, 'deleteChatGeek'])->name('chat.tech.delete');

// ROTAS ADMINISTRADOR PROTEGIDAS POR UM MIDDLEWARE
Route::middleware(CheckAdmin::class)->group(function(){
Route::get('/dash', [AdmController::class, 'index'])
    ->name('dash');
Route::delete('/admin/{id}', [AdmController::class, 'delete'])
    ->name('users.delete');
Route::post('/edit/{id}', [AdmController::class, 'editHour'])
    ->name('edit.hour');
Route::put('/update-hour/{id}', [AdmController::class, 'store'])
    ->name('update.hour');
Route::put('/admin-edit/{id}', [AdmController::class, 'editUser'])
    ->name('update.user');
Route::delete('/chat/{id}', [AdmController::class, 'deleteChat'])
    ->name('chat.delete');
Route::delete('/delete-chatall', [AdmController::class, 'deleteChatAll'])
    ->name('chat.deleteall');
Route::delete('/chattech/{id}', [AdmController::class, 'deleteChatTech'])
    ->name('chat.tech.delete');
Route::delete('/delete-techall', [AdmController::class, 'deleteChatTechAll'])
    ->name('chat.tech.deleteall');
Route::delete('/chatgeek/{id}', [AdmController::class, 'deleteChatGeek'])
    ->name('chat.geek.delete');
Route::delete('/delete-geekall', [AdmController::class, 'deleteChatGeekAll'])
    ->name('chat.geek.deleteall');
});

// Rota para chegar ao mural, necessita estar logado e verificado
Route::get('/mural', function () {
    return view('pages.mural');
})->middleware(['auth', 'verified'])->name('mural');

// grupo de rotas que necessitam de autenticação
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
    Route::delete('/mural/delete/{post}', [PostController::class, 'destroy'])->name('delete');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/chattech', [ChatController::class, 'indexTech'])->name('chat.tech');
});

require __DIR__ . '/auth.php';
