<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use App\Models\User;
use App\Models\Course;
use App\Models\Discipline;
use App\Models\Blocks;
use App\Models\Room;
use App\Models\Semester;
use App\Models\Hour;

class AdmController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // usuários
        $users = User::all();

        // cadastrar disciplinas
        $courses = Course::all();
        $disciplines = Discipline::all();
        $blocks = Blocks::all();
        $users = User::all();
        $rooms = Room::all();
        $semesters = Semester::all();

        // dsm 1 semestre
        $dsm1 = Hour::whereIn('id', [8,9,10,11,12,13,14,15,16])->get();
        // dsm 2 semestre
        $dsm2 = Hour::whereIn('id', [1,2,3,4,5,6,7])->get();

        return view('pages.adms.dashboard',
        compact(
            'posts','users',
            // disciplinas
            'blocks','rooms','semesters','courses','disciplines',
            //dsm1 - dsm2
            'dsm1','dsm2',
        ));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => 'Usuário excluído com sucesso!']);
    }

    public function editHour($id)
    {
        $hour = Hour::findOrFail($id);

        return view('pages.adms.edit-hour', compact('hour'));
    }

    public function store(Request $request, $id)
    {
        $hour = Hour::findOrFail($id);
        // Atualizar professor
        $user = $hour->user;
        $user->name = $request->user;
        $user->save();

        // Atualizar curso
        $course = $hour->course;
        $course->description = $request->course;
        $course->save();

        // Atualizar Semestre
        $semester = $hour->semester;
        $semester->name = $request->semester;
        $semester->save();

        // Atualizar Disciplina
        $discipline = $hour->discipline;
        $discipline->name = $request->discipline;
        $discipline->save();

        // Atualizar Sala
        $room = $hour->room;
        $room->name = $request->room;
        $room->save();

        // Atualizar Block
        $block = $hour->block;
        $block->block = $request->block;
        $block->save();

        // Atualizar Dia e Hora
        $hour->dia = $request->dia;
        $hour->save();

        $hour->hora = $request->hora;
        $hour->save();
    }
}
