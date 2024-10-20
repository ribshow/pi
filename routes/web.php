<?php

use App\Http\Controllers\HourController;
use App\Http\Controllers\IntegraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Models\Semester;
use App\Models\Discipline;
use App\Models\Hour;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdmController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('pages.index');
});

Route::post('/chat', function () {
    // Enviar a requisição para a API C# com os parâmetros
    $response = Http::withoutVerifying()->post('https://localhost:7125/Chat/send');

    // Checar se a resposta foi bem-sucedida
    if ($response->successful()) {
        return response()->json(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);
    } else {
        return response()->json(['success' => false, 'message' => 'Erro ao enviar a mensagem.'], $response->status());
    }
})->name('chat.store');

// teste
Route::get('/teste', function () {
    // Consumindo a API
    $response = Http::withoutVerifying()->get('https://localhost:7125/Chat');

        // Verifica se a requisição foi bem-sucedida
        if ($response->successful()) {
            $data = $response->json();
        } else {
            // Caso a API falhe, define um array vazio
            $data = [];
        }

        // Remova o dd() depois que terminar de testar
        dd($data);

        // Retornando a view com a variável 'data' 
        return view('pages.chat.index', ['data' => $data]);
});

Route::get('/chat', [ChatController::class, 'index'])
    ->name('chat.index')
    ->middleware('auth');

Route::get('/grade', [HourController::class, 'show_dsm'])->name("grade");
Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/find', function () {
    $courses = Course::all();
    foreach ($courses as $course) {
        echo "<h2>$course->id - $course->description</h2><br/>";
        foreach ($course->disciplines as $disc) {
            echo "$disc->id - $disc->name<br>";
        }
    }
});

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

// ROTAS ADMINISTRADOR PROTEGIDAS POR UM MIDDLEWARE
Route::get('/dash', [AdmController::class, 'index'])
    ->name('dash')
    ->middleware(CheckAdmin::class);
Route::delete('/admin/{id}', [AdmController::class, 'delete'])
    ->name('users.delete')
    ->middleware(CheckAdmin::class);
Route::post('/edit/{id}', [AdmController::class, 'editHour'])
    ->name('edit.hour')
    ->middleware(CheckAdmin::class);
Route::put('/update-hour/{id}', [AdmController::class, 'store'])
    ->name('update.hour')
    ->middleware(CheckAdmin::class);
Route::put('/admin-edit/{id}', [AdmController::class, 'editUser'])
    ->name('update.user')
    ->middleware(CheckAdmin::class);

Route::get('/mural', function () {
    return view('pages.mural');
})->middleware(['auth', 'verified'])->name('mural');

// TESTE
Route::get('/debug', function () {
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
    Route::delete('/mural/delete/{post}', [PostController::class, 'destroy'])->name('delete');
});

require __DIR__ . '/auth.php';
